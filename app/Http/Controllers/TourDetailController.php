<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourDetailController extends Controller
{
    /**
     * Menampilkan halaman detail tour.
     */
    public function show($slug)
    {
        // Ambil tour berdasarkan slug beserta relasi days
        $tour = Tour::with('days')->where('slug', $slug)->firstOrFail();

        // Kirim ke view detail
        return view('user.tour.detail', compact('tour'));
    }
}
