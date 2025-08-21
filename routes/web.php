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


Route::get('/blog/tokyo', function () {
    return view('BlogPages.tokyo');
})->name('blog.tokyo');

Route::get('/blog/italy', function () {
    return view('BlogPages.italy');
})->name('blog.italy');

Route::get('/blog/kandy', function () {
    return view('BlogPages.kandy');
})->name('blog.kandy');




Route::get('/blog/hamburg', function () {
    return view('BlogPages.hamburg');
})->name('blog.hamburg');

Route::get('/blog/kandy', function () {
    return view('BlogPages.kandy');
})->name('blog.kandy');

// Blog Kandy
Route::get('/blog/kandy', function () {
    return view('BlogPages.kandy');
})->name('blog.kandy');

Route::get('/blog/tokyo', function () {
    return view('BlogPages.tokyo');
})->name('blog.tokyo');


Route::get('/custom-trip', function () {
    return view('BlogPages.custom'); // menampilkan custom.blade.php
})->name('custom.trip');
