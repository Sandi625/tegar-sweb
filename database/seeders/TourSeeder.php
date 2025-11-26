<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Tour;
use App\Models\Category;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan kategori sudah ada
        $category1 = Category::where('slug', 'bromo-ijen-tour-3-day-2-night')->first();
        $category2 = Category::where('slug', 'tumpak-sewu-bromo-ijen-4-day-3-night')->first();
        $category3 = Category::where('slug', 'midnight-ijen-from-banyuwangi-or-bali')->first();

        $tours = [
            [
                'category'    => $category1,
                'title'       => 'Bromo - Ijen Tour 3 Day 2 Night',
                'price'       => 350,
                'description' => 'Embark on an unforgettable adventure exploring the stunning landscapes of Bromo and Ijen over 3 days and 2 nights. Witness breathtaking sunrises, explore volcanic craters, and immerse yourself in the local culture along the way.',
                'status'      => 1,
                'days' => [
                    [
                        'title' => 'Day 1 - Surabaya to Bromo',
                        'description' => 'Depart from Surabaya in the early morning. Enjoy scenic drives and explore the majestic Bromo volcano. Capture the sunrise over the vast Tengger caldera, and spend the night in a cozy local guesthouse.'
                    ],
                    [
                        'title' => 'Day 2 - Bromo to Ijen',
                        'description' => 'Journey towards Ijen, stopping along the way for photo opportunities and local experiences. Hike the famous Ijen crater and marvel at the turquoise acidic crater lake. Witness the mesmerizing blue flames before heading to your accommodation.'
                    ],
                    [
                        'title' => 'Day 3 - Return',
                        'description' => 'After breakfast, enjoy a relaxed morning before returning to Bali or Surabaya. Take with you unforgettable memories of volcanic landscapes, cultural encounters, and scenic adventures.'
                    ],
                ],
            ],
            [
                'category'    => $category2,
                'title'       => 'Tumpak Sewu - Bromo - Ijen 4 Day 3 Night',
                'price'       => 450,
                'description' => 'Discover the hidden gems of East Java on this 4-day, 3-night journey from Bali. Experience majestic waterfalls, iconic volcanic landscapes, and the famous Ijen crater, while enjoying comfortable accommodations and local hospitality.',
                'status'      => 1,
                'days' => [
                    [
                        'title' => 'Day 1 - Bali to Tumpak Sewu',
                        'description' => 'Depart from Bali in the morning. Arrive at Tumpak Sewu waterfall and enjoy its spectacular beauty. Take time for photography and guided exploration before heading to your guesthouse.'
                    ],
                    [
                        'title' => 'Day 2 - Tumpak Sewu to Bromo',
                        'description' => 'Travel towards Bromo, passing through charming villages and scenic landscapes. Explore the majestic Bromo volcano and witness the magical sunset over the caldera.'
                    ],
                    [
                        'title' => 'Day 3 - Bromo to Ijen',
                        'description' => 'Journey to Ijen crater. Experience the breathtaking blue flames and hike up to the turquoise crater lake. Enjoy the serene volcanic atmosphere before resting for the night.'
                    ],
                    [
                        'title' => 'Day 4 - Return to Bali',
                        'description' => 'After breakfast, depart back to Bali. Reflect on the amazing adventures and memories created during this immersive 4-day journey.'
                    ],
                ],
            ],
            [
                'category'    => $category3,
                'title'       => 'Midnight Ijen from Banyuwangi or Bali',
                'price'       => 200,
                'description' => 'Experience the enchanting Ijen crater at night on this guided tour from either Banyuwangi or Bali. Witness the famous blue flames, hike up the volcanic terrain, and enjoy the unforgettable sunrise over the crater lake.',
                'status'      => 1,
                'days' => [
                    [
                        'title' => 'Night Hike',
                        'description' => 'Depart in the evening and start the guided night hike to Ijen crater. Along the way, experience the thrill of walking in the dark volcanic landscape illuminated only by your headlamp and the mesmerizing blue flames.'
                    ],
                    [
                        'title' => 'Sunrise & Return',
                        'description' => 'Reach the summit in time to watch a spectacular sunrise over the crater lake. Capture amazing photos and take in the breathtaking views before returning to your starting point in Banyuwangi or Bali.'
                    ],
                ],
            ],

            [
    'category'    => $category1,
    'title'       => 'Bromo Sunrise Tour – One Day Trip',
    'price'       => 120,
    'description' => 'A perfect one-day escape to witness the magical sunrise over Mount Bromo. Ideal for travelers who want a quick but unforgettable adventure.',
    'status'      => 1,
    'days' => [
        [
            'title' => 'Day 1 – Midnight Pick-up & Sunrise',
            'description' => 'Pick-up at midnight from Surabaya or Malang, drive to Penanjakan viewpoint, witness sunrise, explore Sea of Sand, and visit Bromo Crater before returning.'
        ]
    ]
],
[
    'category'    => $category2,
    'title'       => 'Tumpak Sewu – Bromo Tour 2 Day 1 Night',
    'price'       => 250,
    'description' => 'A short adventure exploring the majestic Tumpak Sewu waterfall combined with the iconic Mount Bromo sunrise experience.',
    'status'      => 1,
    'days' => [
        [
            'title' => 'Day 1 – Tumpak Sewu Waterfall',
            'description' => 'Explore one of Indonesia’s most beautiful waterfalls, trek down the canyon, visit Goa Tetes, and stay overnight in Malang.'
        ],
        [
            'title' => 'Day 2 – Bromo Sunrise',
            'description' => 'Head to Bromo for sunrise, visit the crater, Sea of Sand, and savannah before returning to Surabaya or Malang.'
        ]
    ]
],
[
    'category'    => $category3,
    'title'       => 'Ijen Blue Fire Tour – Midnight Trip',
    'price'       => 95,
    'description' => 'A thrilling midnight hike to witness the famous electric-blue flames of Ijen Crater, followed by a sunrise over the turquoise acid lake.',
    'status'      => 1,
    'days' => [
        [
            'title' => 'Day 1 – Midnight Start',
            'description' => 'Pick-up from Banyuwangi or Bali at midnight, ferry crossing if needed, and arrival at Ijen base camp.'
        ],
        [
            'title' => 'Day 2 – Blue Fire Hike & Sunrise',
            'description' => 'Start hiking at 2 AM, witness blue fire, enjoy sunrise, and return to Banyuwangi/Bali.'
        ]
    ]
],
[
    'category'    => $category1,
    'title'       => 'Bromo – Madakaripura Tour One Day',
    'price'       => 150,
    'description' => 'Combine the magical sunrise of Bromo with a refreshing adventure at the mystical Madakaripura waterfall.',
    'status'      => 1,
    'days' => [
        [
            'title' => 'Day 1 – Sunrise & Waterfall',
            'description' => 'Start early for sunrise in Bromo, explore the crater, then visit Madakaripura waterfall before heading back.'
        ]
    ]
],
[
    'category'    => $category2,
    'title'       => 'Tumpak Sewu – Ijen Tour 3 Day 2 Night',
    'price'       => 380,
    'description' => 'A complete volcano & waterfall adventure—discover the stunning Tumpak Sewu waterfall and the phenomenal blue fire of Ijen.',
    'status'      => 1,
    'days' => [
        [
            'title' => 'Day 1 – Tumpak Sewu Waterfall',
            'description' => 'Drive to Lumajang, trek to Tumpak Sewu, explore the canyon, and stay overnight nearby.'
        ],
        [
            'title' => 'Day 2 – Transfer to Ijen Area',
            'description' => 'Relaxing travel day, enjoy local culture, and prepare for the midnight hike.'
        ],
        [
            'title' => 'Day 3 – Ijen Blue Fire',
            'description' => 'Midnight hike to Ijen crater, watch blue fire, sunrise, then return to Banyuwangi or Bali.'
        ]
    ]
],

        ];

        foreach ($tours as $tourData) {
            if (!$tourData['category']) continue; // skip jika kategori tidak ada

            $tour = Tour::create([
                'category_id' => $tourData['category']->id,
                'title'       => $tourData['title'],
                'slug'        => Str::slug($tourData['title']),
                'route_name'  => Str::slug($tourData['title']),
                'images'      => [], // kosong, bisa ditambahkan gambar manual
                'price'       => $tourData['price'],
                'description' => $tourData['description'],
                'status'      => $tourData['status'],
            ]);

            // Tambahkan days
            foreach ($tourData['days'] as $day) {
                $tour->days()->create([
                    'title'       => $day['title'],
                    'description' => $day['description'],
                ]);
            }
        }
    }
}
