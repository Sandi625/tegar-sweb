<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Bromo - Ijen - Tour 3 Day 2 Night',
            'Tumpak Sewu - Bromo - Ijen 4 Day 3 Night',
            'Midnight Ijen from Banyuwangi or Bali',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
