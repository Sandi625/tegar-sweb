<?php

use App\Models\Tour;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AllTourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserBlogController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TourDetailController;
use App\Http\Controllers\UserReviewController;
use App\Http\Controllers\UserGalleryController;
use App\Http\Middleware\AuthDashboard; // jika pakai custom

// routes/web.php


// Route::get('/allpackage', function () {
//     return view('blog'); // resources/views/page/blog.blade.php
// })->name('allpackage.page');

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
Route::get('/gallery1', function () {
    return view('gallery'); // resources/views/page/gallery.blade.php
})->name('gallery.page');


Route::get('/bromoijen/bali', function () {
    return view('BlogPages.bromoijen.bromoijen1');
})->name('bromoijen.bali');


Route::get('/blog/italy', function () {
    return view('BlogPages.italy');
})->name('blog.italy');

//

Route::get('/bromoijen/surabaya', function () {
    return view('BlogPages.bromoijen.bromoijen2');
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

// Route::get('/bromoijen/bali', function () {
//     return view('BlogPages.bromoijen.finshbali');
// })->name('bromoijen.bali');


Route::get('/custom-trip', function () {
    return view('BlogPages.custom'); // menampilkan custom.blade.php
})->name('custom.trip');


Route::get('/bromoijen1', function () {
    return view('BlogPages.bromoijen.bromoijenoption');
})->name('bromoijen1.page');


Route::get('/bromoijen2', function () {
    return view('BlogPages.bromoijen.bromoijenoption2');
})->name('bromoijen2.page');



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





Route::get('/frombali1', function () {
    return view('BlogPages.bromoijen.bromoijenbali1');
})->name('pesanfrombali1.page');

Route::get('/pesanbali1', function () {
    return view('BlogPages.bromoijen.pesanbali1');
})->name('pesanbali1.page');





Route::get('/frombali2', function () {
    return view('BlogPages.bromoijen.bromoijenbali2');
})->name('pesanfrombali2.page');

Route::get('/pesanbali2', function () {
    return view('BlogPages.bromoijen.pesanbali2');
})->name('pesanbali2.page');





Route::get('/tumpaksewuoption', function () {
    return view('BlogPages.tumpaksewu.option1');
})->name('tumpakoption1.page');


Route::get('/tumpaksewu1', function () {
    return view('BlogPages.tumpaksewu.tumpaksewu1');
})->name('tumpak1.page');


Route::get('/tumpakpesan1', function () {
    return view('BlogPages.tumpaksewu.pesan1');
})->name('tumpakpesan1b.page');


Route::get('/tumpaksewu2', function () {
    return view('BlogPages.tumpaksewu.tumpaksewu2');
})->name('tumpak2.page');


Route::get('/tumpakpesan2', function () {
    return view('BlogPages.tumpaksewu.pesan2');
})->name('tumpakpesan1.page');


Route::get('/tumpaksewuoption2', function () {
    return view('BlogPages.tumpaksewu.option2');
})->name('tumpakoption2.page');



Route::get('/tumpak3', function () {
    return view('BlogPages.tumpaksewu.tumpaksewu3');
})->name('tumpak3.page');

Route::get('/tumpakpesan3', function () {
    return view('BlogPages.tumpaksewu.pesan3');
})->name('tumpakpesan3.page');


Route::get('/tumpak4', function () {
    return view('BlogPages.tumpaksewu.tumpaksewu4');
})->name('tumpak4.page');

Route::get('/tumpakpesan4', function () {
    return view('BlogPages.tumpaksewu.pesan4');
})->name('tumpakpesan4.page');


#####################################################################################################################################################




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route utama detail tour
Route::get('/tour-detail/{slug}', [TourDetailController::class, 'show'])
    ->name('tour.detail');

// ROUTE DINAMIS — HANYA KALAU TABLE ADA
if (!app()->runningInConsole() && Schema::hasTable('tours')) {

    $tours = \App\Models\Tour::select('slug', 'route_name')
                ->whereNotNull('route_name')
                ->where('status', 1)
                ->get();

    foreach ($tours as $tour) {
        if (!empty($tour->slug) && !empty($tour->route_name)) {

            // Route statis tapi tetap mengirim slug ke controller
            Route::get("/{$tour->slug}", function() use ($tour) {
                return app(TourDetailController::class)->show($tour->slug);
            })->name($tour->route_name);
        }
    }
}






// Route::get('/tour/{tour}/booking', [BookingController::class, 'create'])->name('tour.booking');
// Menampilkan form booking
Route::get('/tour/{tour}/booking', [BookingController::class, 'create'])->name('tour.booking');
Route::post('/tour/{tour}/booking', [BookingController::class, 'store'])->name('tour.booking.store');



Route::get('/userblog', [UserBlogController::class, 'index'])->name('user.blog.index');
Route::get('/userblog/{slug}', [UserBlogController::class, 'show'])->name('user.blog.show');






// USER REVIEWS
Route::prefix('reviews')->name('user.review.')->group(function () {
    Route::get('/', [UserReviewController::class, 'index'])->name('index');
    Route::get('/create', [UserReviewController::class, 'create'])->name('create');
    Route::post('/store', [UserReviewController::class, 'store'])->name('store');
    Route::get('/{id}', [UserReviewController::class, 'show'])->name('show');
});


Route::get('/allpackage', [AllTourController::class, 'index'])->name('allpackage.page');


Route::get('/login-page', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-dashboard', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// Route::resource('gallery', GalleryController::class);




// ROUTE GALLERY UNTUK USER (AMAN, TIDAK TABRAKAN DENGAN ADMIN)
Route::prefix('galleries')->name('user.gallery.')->group(function () {

    // halaman list gabungan (opsional bila masih dipakai)
    Route::get('/', [UserGalleryController::class, 'index'])->name('index');

    // halaman gambar
    Route::get('/images', [UserGalleryController::class, 'images'])->name('images');

    // halaman video
    Route::get('/videos', [UserGalleryController::class, 'videos'])->name('videos');

    // detail item
    Route::get('/detail/{id}', [UserGalleryController::class, 'show'])->name('show');

});




// Semua route yang hanya boleh diakses admin
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');

    Route::resource('review', ReviewController::class);
});

// Semua route yang hanya perlu login
Route::middleware([Authenticate::class])->group(function () {
    Route::resource('tour', TourController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('gallery', GalleryController::class);
});
