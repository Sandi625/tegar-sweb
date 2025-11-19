<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    /**
     * Menampilkan semua review yang aktif untuk user.
     */
    public function index()
    {
        $reviews = Review::where('status', 1)
            ->latest()
            ->get();

        return view('user.reviews.index', compact('reviews'));
    }

    /**
     * Form untuk user membuat review baru
     */
    public function create()
    {
        return view('user.reviews.create');
    }

    /**
     * Simpan review dari user
     */
public function store(Request $request)
{
    $request->validate([
        'name'        => 'required|string|max:100',
        'email'       => 'nullable|email|max:100', // boleh kosong
        'rating'      => 'required|integer|min:1|max:5',
        'review_text' => 'required|string',
        'photo'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    try {
        $review = new Review();
        $review->name        = $request->name;
        $review->email       = $request->email; // bisa null
        $review->rating      = $request->rating;
        $review->review_text = $request->review_text;
        $review->status      = 0; // default pending

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/reviews'), $filename);
            $review->photo = $filename;
        }

        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to submit review: '.$e->getMessage());
    }
}



    /**
     * Menampilkan detail review tertentu (opsional)
     */
    public function show($id)
    {
        $review = Review::where('status', 1)->findOrFail($id);

        return view('user.reviews.show', compact('review'));
    }
}
