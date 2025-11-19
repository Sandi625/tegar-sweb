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
        // Hanya tampilkan review yang status = 1 (aktif)
        $reviews = Review::where('status', 1)
            ->latest()
            ->get();

        return view('user.reviews.index', compact('reviews'));
    }

    /**
     * Menampilkan detail review tertentu (opsional).
     */
    public function show($id)
    {
        $review = Review::where('status', 1)->findOrFail($id);

        return view('user.reviews.show', compact('review'));
    }
}
