<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourDay;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::with('category')->get();
        return view('admin.tour.index', compact('tours'));
    }

    public function show(Tour $tour)
{
    // Load relasi kategori dan days
    $tour->load(['category', 'days']);

    return view('admin.tour.show', compact('tour'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.tour.create', compact('categories'));
    }

  public function store(Request $request)
{
    try {
        // VALIDASI
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'title'       => 'required|string|max:255',
            'route_name'  => 'nullable|string|max:255',
            'images.*'    => 'nullable|mimes:jpg,png,jpeg,webp,heic,heif|max:102400',
            'price'       => 'required|numeric',
            'status'      => 'nullable|boolean',

            // Days
            'days'        => 'required|array|min:1',
            'days.*.title'       => 'required|string|max:255',
            'days.*.description' => 'required|string'
        ]);

        // Jika validasi gagal → return JSON
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // HANDLE IMAGES
        $imageNames = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {

                if (!$img->isValid()) {
                    return response()->json([
                        'errors' => ['images' => ['File upload tidak valid / rusak.']]
                    ], 422);
                }

                $ext = strtolower($img->getClientOriginalExtension());
                $filename = time() . '-' . uniqid() . '.' . $ext;

                $img->move(public_path('uploads/tours'), $filename);
                $imageNames[] = $filename;
            }
        }

        // AUTO GENERATE ROUTE NAME JIKA KOSONG
        $routeName = $request->route_name ?: Str::slug($request->title);

        // CREATE TOUR
        $tour = Tour::create([
            'category_id' => $request->category_id,
            'title'       => $request->title,
            'slug'        => Str::slug($request->title),
            'route_name'  => $routeName,
            'images'      => $imageNames,
            'price'       => $request->price,
            'description' => $request->description,
            'status'      => $request->status ?? 0, // default 0 kalau tidak diisi
        ]);

        // CREATE DAYS
        foreach ($request->days as $day) {
            $tour->days()->create([
                'title'       => $day['title'],
                'description' => $day['description'],
            ]);
        }

        return response()->json([
            'message' => 'Tour berhasil dibuat!',
            'data'    => $tour
        ], 200);

    } catch (\Exception $e) {

        return response()->json([
            'errors' => ['server' => [$e->getMessage()]]
        ], 500);
    }
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $categories = Category::all();
        return view('admin.tour.edit', compact('tour', 'categories'));
    }

public function update(Request $request, Tour $tour)
{
    // Validasi input
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'title'       => 'required|string|max:255',
        'images.*'    => 'nullable|mimes:jpg,png,jpeg,webp,heic,heif|max:102400',
        'price'       => 'required|numeric',
        'status'      => 'nullable|boolean',
        'description' => 'nullable|string',

        // days
        'days'                 => 'required|array|min:1',
        'days.*.id'            => 'nullable|exists:tour_days,id',
        'days.*.title'         => 'required|string|max:255',
        'days.*.description'   => 'required|string',
        'days.*._destroy'      => 'nullable|boolean',
    ]);

    DB::beginTransaction();

    try {
        // ============================================================
        // 1. HANDLE GAMBAR
        // ============================================================
        $imageNames = $tour->images ?? [];

        if ($request->hasFile('images')) {

            // Hapus gambar lama
            if ($imageNames) {
                foreach ($imageNames as $oldImg) {
                    $path = public_path('uploads/tours/' . $oldImg);
                    if (file_exists($path)) unlink($path);
                }
            }

            // Upload baru
            $imageNames = [];
            foreach ($request->file('images') as $img) {
                $ext = strtolower($img->getClientOriginalExtension());
                $filename = time() . '-' . uniqid() . '.' . $ext;
                $img->move(public_path('uploads/tours'), $filename);
                $imageNames[] = $filename;
            }
        }

        // ============================================================
        // 2. GENERATE SLUG OTOMATIS
        // ============================================================
        $slug = Str::slug($request->title);

        // ============================================================
        // 3. ROUTE NAME OTOMATIS (TANPA INPUT USER)
        // ============================================================
        $routeName = "tour." . $slug;

        // ============================================================
        // 4. UPDATE TOUR
        // ============================================================
        $tour->update([
            'category_id' => $request->category_id,
            'title'       => $request->title,
            'slug'        => $slug,
            'route_name'  => $routeName,   // ← AUTOMATIS
            'images'      => $imageNames,
            'price'       => $request->price,
            'description' => $request->description,
            'status'      => $request->status ? 1 : 0,
        ]);


        // ============================================================
        // 5. UPDATE DAYS (ITINERARY)
        // ============================================================
        foreach ($request->days as $day) {

            // HAPUS DAY
            if (isset($day['_destroy']) && $day['_destroy'] == "1") {
                if (!empty($day['id'])) {
                    TourDay::where('id', $day['id'])->delete();
                }
                continue;
            }

            // UPDATE EXISTING
            if (!empty($day['id'])) {
                TourDay::where('id', $day['id'])->update([
                    'title'       => $day['title'],
                    'description' => $day['description'],
                ]);
            }

            // BUAT HARI BARU
            else {
                TourDay::create([
                    'tour_id'     => $tour->id,
                    'title'       => $day['title'],
                    'description' => $day['description'],
                ]);
            }
        }

      DB::commit();

          return redirect()->route('tour.index', $tour->id)
            ->with('success', 'Tour berhasil diperbarui.'); // ← SweetAlert muncul di halaman edit


        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
}





    public function destroy(Tour $tour)
    {
        if ($tour->images) {
            foreach ($tour->images as $img) {
                $path = public_path('uploads/tours/' . $img);
                if (file_exists($path)) unlink($path);
            }
        }

        $tour->delete();

        return redirect()->route('tour.index')->with('success', 'Tour berhasil dihapus');
    }
}
