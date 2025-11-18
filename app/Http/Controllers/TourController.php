<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Category;
use App\Models\TourDay;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
            $request->validate([
                'category_id' => 'required|exists:categories,id',
                'title'       => 'required|string|max:255',
                'images.*'    => 'nullable|mimes:jpg,png,jpeg,webp,heic,heif|max:102400',
                'price'       => 'required|numeric',
                'status'      => 'nullable|boolean',
                'days'        => 'required|array|min:1',
                'days.*.title'       => 'required|string|max:255',
                'days.*.description' => 'required|string'
            ]);

            // HANDLE IMAGES
            $imageNames = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $img) {
                    if (!$img->isValid()) {
                        throw new \Exception("File upload tidak valid / rusak.");
                    }

                    $ext = strtolower($img->getClientOriginalExtension());
                    $filename = time() . '-' . uniqid() . '.' . $ext;

                    $img->move(public_path('uploads/tours'), $filename);
                    $imageNames[] = $filename;
                }
            }

            // CREATE TOUR
            $tour = Tour::create([
                'category_id' => $request->category_id,
                'title'       => $request->title,
                'slug'        => Str::slug($request->title),
                'images'      => $imageNames,
                'price'       => $request->price,
                'description' => $request->description,
                'status'      => $request->status ?? 0
            ]);

            // HANDLE DAYS
            foreach ($request->days as $index => $day) {
                TourDay::create([
                    'tour_id'     => $tour->id,
                    'title'       => $day['title'],
                    'description' => $day['description'],
                    'order'       => $index + 1
                ]);
            }

            return redirect()->route('tour.index')->with('success', 'Tour berhasil ditambahkan');

        } catch (\Exception $e) {
            Log::error('Gagal menyimpan tour: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat menambahkan tour!')->withInput();
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
        'days'        => 'required|array|min:1',
        'days.*.id'   => 'nullable|exists:tour_days,id',
        'days.*.title'       => 'required|string|max:255',
        'days.*.description' => 'required|string',
        'days.*._destroy'    => 'nullable|boolean',
    ]);

    DB::beginTransaction();

    try {
        // Handle gambar utama tour
        $imageNames = $tour->images ?? [];
        if ($request->hasFile('images')) {
            if ($imageNames) {
                foreach ($imageNames as $oldImg) {
                    $oldPath = public_path('uploads/tours/' . $oldImg);
                    if (file_exists($oldPath)) unlink($oldPath);
                }
            }

            $imageNames = [];
            foreach ($request->file('images') as $img) {
                $ext = strtolower($img->getClientOriginalExtension());
                $filename = time() . '-' . uniqid() . '.' . $ext;
                $img->move(public_path('uploads/tours'), $filename);
                $imageNames[] = $filename;
            }
        }

        // Update tour
        $tour->update([
            'category_id' => $request->category_id,
            'title'       => $request->title,
            'slug'        => Str::slug($request->title),
            'images'      => $imageNames,
            'price'       => $request->price,
            'description' => $request->description,
            'status'      => $request->status ?? $tour->status
        ]);

        // Update atau create hari
        foreach ($request->days as $index => $day) {

            // Hapus hari jika ditandai _destroy
            if (isset($day['_destroy']) && $day['_destroy'] == 1 && isset($day['id'])) {
                $tourDay = TourDay::find($day['id']);
                if ($tourDay && $tourDay->image && file_exists(public_path('uploads/tour_days/' . $tourDay->image))) {
                    unlink(public_path('uploads/tour_days/' . $tourDay->image));
                }
                TourDay::destroy($day['id']);
                continue; // skip update/create
            }

            if (isset($day['id']) && $day['id']) {
                $tourDay = TourDay::find($day['id']);
                if ($tourDay) {
                    $tourDay->update([
                        'title'       => $day['title'],
                        'description' => $day['description'],
                        'order'       => $index + 1
                    ]);
                }
            } else {
                TourDay::create([
                    'tour_id'     => $tour->id,
                    'title'       => $day['title'],
                    'description' => $day['description'],
                    'order'       => $index + 1
                ]);
            }
        }

        DB::commit();
        return redirect()->route('tour.index')->with('success', 'Tour berhasil diperbarui');
    } catch (\Illuminate\Validation\ValidationException $e) {
        DB::rollBack();
        $errors = implode(' | ', collect($e->errors())->flatten()->toArray());
        return back()->with('error', 'Validasi gagal: ' . $errors)->withInput();
    } catch (\Exception $e) {
        DB::rollBack();
        Log::error('Gagal update tour: ' . $e->getMessage());
        return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
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
