<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
public function index(Request $request)
{
    $search = $request->search;

    // Ambil semua kategori + tours
    $categories = Category::with(['tours' => function($query) use ($search) {
        if ($search) {
            $query->where('title', 'like', "%{$search}%");
        }
    }])->get();

    return view('index', compact('categories', 'search'));
}



}
