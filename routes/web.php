<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('index'); // resources/views/index.blade.php
})->name('home.page');

// Places
Route::get('/places', function () {
    return view('places'); // resources/views/page/places.blade.php
})->name('places.page');

// Blog
Route::get('/blog', function () {
    return view('blog'); // resources/views/page/blog.blade.php
})->name('blog.page');

// Gallery
Route::get('/gallery', function () {
    return view('gallery'); // resources/views/page/gallery.blade.php
})->name('gallery.page');
