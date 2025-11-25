<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'review_text' => 'Amazing tour! Highly recommended.',
                'rating' => 5,
                'photo' => 'john.jpg', // dummy photo
                'status' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'review_text' => 'Good experience, the guide was very friendly.',
                'rating' => 4,
                'photo' => 'jane.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Alex Johnson',
                'email' => null, // email kosong
                'review_text' => 'I loved the Midnight Ijen tour. Spectacular view!',
                'rating' => 5,
                'photo' => null,
                'status' => 1,
            ],
            [
                'name' => 'Maria Lee',
                'email' => 'maria@example.com',
                'review_text' => 'The 4D3N Bromo-Ijen tour was well organized and fun.',
                'rating' => 4,
                'photo' => 'maria.jpg',
                'status' => 1,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
