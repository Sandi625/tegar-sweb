<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Tour;

class TourComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Bagikan data tour aktif ke semua view
        View::composer('*', function ($view) {
            $view->with('allTours', Tour::where('status', 1)->get());
        });
    }
}
