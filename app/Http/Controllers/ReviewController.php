<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
   public function index()
{
    $reviews = Review::latest()->paginate(5);
    return view('admin.review.index', compact('reviews'));
}


    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name'        => 'required|string|max:100',
        'email'       => 'nullable|email|max:100', // bisa kosong
        'review_text' => 'required|string',
        'rating'      => 'required|integer|min:1|max:5',
        'photo'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'status'      => 'nullable|boolean',
    ]);

    // Upload photo
    $photoName = null;
    if ($request->hasFile('photo')) {
        $photoName = time() . '_' . uniqid() . '.' . $request->photo->extension();
        $request->photo->move(public_path('uploads/reviews'), $photoName);
    }

    Review::create([
        'name'        => $request->name,
        'email'       => $request->email, // tambahkan email
        'review_text' => $request->review_text,
        'rating'      => $request->rating,
        'photo'       => $photoName,
        'status'      => $request->status ?? 1,
    ]);

    return redirect()->route('review.index')->with('success', 'Review berhasil ditambahkan!');
}


    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.review.edit', compact('review'));
    }

  public function update(Request $request, $id)
{
    $review = Review::findOrFail($id);

    $request->validate([
        'name'        => 'required|string|max:100',
        'email'       => 'nullable|email|max:100', // tambahkan email
        'review_text' => 'required|string',
        'rating'      => 'required|integer|min:1|max:5',
        'photo'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'status'      => 'nullable|boolean',
    ]);

    $photoName = $review->photo;

    if ($request->hasFile('photo')) {

        // Hapus foto lama
        if ($photoName && file_exists(public_path('uploads/reviews/' . $photoName))) {
            unlink(public_path('uploads/reviews/' . $photoName));
        }

        // Upload foto baru
        $photoName = time() . '_' . uniqid() . '.' . $request->photo->extension();
        $request->photo->move(public_path('uploads/reviews'), $photoName);
    }

    $review->update([
        'name'        => $request->name,
        'email'       => $request->email, // tambahkan email
        'review_text' => $request->review_text,
        'rating'      => $request->rating,
        'photo'       => $photoName,
        'status'      => $request->status ?? 1,
    ]);

    return redirect()->route('review.index')->with('success', 'Review berhasil diperbarui!');
}


    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        // Hapus foto
        if ($review->photo && file_exists(public_path('uploads/reviews/' . $review->photo))) {
            unlink(public_path('uploads/reviews/' . $review->photo));
        }

        $review->delete();

        return redirect()->route('review.index')->with('success', 'Review berhasil dihapus!');
    }
}
