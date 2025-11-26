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
            [
    'name' => 'Samuel Carter',
    'email' => 'samuel@example.com',
    'review_text' => 'One of the best travel experiences I’ve ever had. Professional team and stunning views!',
    'rating' => 5,
    'photo' => 'samuel.jpg',
    'status' => 1,
],
[
    'name' => 'Linda Nguyen',
    'email' => null,
    'review_text' => 'The trip was smooth and the guide explained everything clearly. Worth every penny.',
    'rating' => 4,
    'photo' => null,
    'status' => 1,
],
[
    'name' => 'Thomas Reed',
    'email' => 'thomas@example.com',
    'review_text' => 'Bromo sunrise was magical. I will definitely come back with my family!',
    'rating' => 5,
    'photo' => 'thomas.jpg',
    'status' => 1,
],
[
    'name' => 'Catherine Hall',
    'email' => 'catherine@example.com',
    'review_text' => 'Great service, comfortable transport, and very friendly guide. Recommended!',
    'rating' => 4,
    'photo' => 'catherine.jpg',
    'status' => 1,
],
[
    'name' => 'Michael Tan',
    'email' => null,
    'review_text' => 'Ijen blue fire is unbelievable! Thank you for making this journey memorable.',
    'rating' => 5,
    'photo' => null,
    'status' => 1,
],

        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
