<?php

// database/seeders/TourSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        Tour::create([
            'title' => 'Bromo Ijen Tour From Surabaya (4D3N)',
            'slug' => 'bromo-ijen-surabaya',
            'image' => 'Images/7.jpg',
            'price' => 350.00,
            'description' => 'Explore Bromo and Ijen from Surabaya in 4 days 3 nights',
            'status' => true,
        ]);

        Tour::create([
            'title' => 'Bromo Ijen Tour from Bali (4D3N)',
            'slug' => 'bromo-ijen-bali',
            'image' => 'Images/IMG_4120.jpg',
            'price' => 370.00,
            'description' => 'Explore Bromo and Ijen from Bali in 4 days 3 nights',
            'status' => true,
        ]);
    }
}

