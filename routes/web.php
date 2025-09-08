<?php

use Illuminate\Support\Facades\Route;

Route::get('/allpackage', function () {
    return view('blog'); // resources/views/page/blog.blade.php
})->name('allpackage.page');

Route::get('/pesanfinsihbali', function () {
    return view('BlogPages.bromoijen.pesanfinishbali');
})->name('pesanfinsihbali.page');

// Homepage
Route::get('/', function () {
    return view('index'); // resources/views/index.blade.php
})->name('home.page');

// Places
Route::get('/places', function () {
    return view('places'); // resources/views/page/places.blade.php
})->name('places.page');

// Blog


// Gallery
Route::get('/gallery', function () {
    return view('gallery'); // resources/views/page/gallery.blade.php
})->name('gallery.page');


Route::get('/bromoijen/bali', function () {
    return view('BlogPages.bromoijen.finshbali');
})->name('bromoijen.bali');

Route::get('/blog/italy', function () {
    return view('BlogPages.italy');
})->name('blog.italy');

//

Route::get('/bromoijen/surabaya', function () {
    return view('BlogPages.bromoijen.kandy');
})->name('bromoijen.surabaya');




Route::get('/blog/hamburg', function () {
    return view('BlogPages.hamburg');
})->name('blog.hamburg');

Route::get('/blog/kandy', function () {
    return view('BlogPages.kandy');
})->name('blog.kandy');

// Blog Kandy
// Route::get('/blog/kandy', function () {
//     return view('BlogPages.kandy');
// })->name('blog.kandy');

Route::get('/bromoijen/bali', function () {
    return view('BlogPages.bromoijen.finshbali');
})->name('bromoijen.bali');


Route::get('/custom-trip', function () {
    return view('BlogPages.custom'); // menampilkan custom.blade.php
})->name('custom.trip');


Route::get('/bromoijen1', function () {
    return view('BlogPages.bromoijen.bromoijenoption');
})->name('bromoijen1.page');


Route::get('/pesan-finish-surabaya', function () {
    return view('BlogPages.bromoijen.pesanfinishsurabaya'); // nama file blade tanpa .blade.php
})->name('pesanfinsihsurabaya.page');





Route::get('/blog', function () {
    return view('BlogPages.blogoption'); // arahkan ke file blog.blade.php
})->name('blog.page');


Route::get('/ijen', function () {
    return view('Blogisi.ijen');
})->name('ijen.page');

Route::get('/bromo', function () {
    return view('Blogisi.bromo');
})->name('bromo.page');

Route::get('/tumpaksewu', function () {
    return view('Blogisi.tumpaksewu');
})->name('tumpaksewu.page');

Route::get('/bali', function () {
    return view('Blogisi.bali');
})->name('bali.page');

Route::get('/custom-tour', function () {
    return view('customTourForm');
})->name('custom.tour.form');


Route::get('/midnight-ijen/option', function () {
    return view('BlogPages.midnightijen.option');
})->name('midnightijen.option');


// route untuk finishbali.blade
Route::get('/ijenfinishbali', function () {
    return view('BlogPages.midnightijen.finishbali');
})->name('finishbali.page');

Route::get('/ijenfinisbanyuwangi', function () {
    return view('BlogPages.midnightijen.finishbanyuwangi');
})->name('finishbanyuwangi.page');



Route::get('/pesanfinishbali', function () {
    return view('BlogPages.midnightijen.pesanfinishbali');
})->name('pesan1mb.page');




Route::get('/pesanfinishbanyuwangi', function () {
    return view('BlogPages.midnightijen.pesanfinishbanyuwangi');
})->name('pesan2mb.page');
