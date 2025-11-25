<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\BlogDay;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title'       => 'Bromo Ijen Adventure',
                'description' => 'Prepare yourself for an unforgettable 3-day adventure across the iconic volcanic landscapes of East Java. Begin your journey with the legendary Bromo sunrise, where golden light bathes the rugged caldera and volcanic sand sea, creating a surreal panorama perfect for photography enthusiasts. Walk amidst misty hills, feel the crisp mountain air, and interact with the welcoming Tenggerese communities, who maintain their centuries-old traditions. The journey continues to the awe-inspiring Ijen crater, home to the unique turquoise acidic lake and the world-famous blue flames, a phenomenon that illuminates the night with an otherworldly glow. Learn about the sulfur miners’ hard work and dedication as you capture unforgettable memories. End your trip reflecting on these incredible landscapes, the local culture, and the sense of accomplishment that comes with conquering these natural wonders.',
                'route_name'  => 'bromo-ijen-adventure',
                'status'      => 1,
                'image'       => 'bromo-ijen.jpg',
                'days' => [
                    [
                        'title' => 'Day 1 - Arrival at Bromo',
                        'description' => 'Arrive early morning and embark on a scenic drive towards Bromo. Witness rolling hills and tea plantations along the way, providing excellent photo opportunities. Reach your accommodation and prepare for a pre-dawn excursion to Mount Bromo viewpoint. Feel the cool air on your skin as the sun rises over the caldera, illuminating the smoky volcanic landscape. Explore the Sea of Sand, ride a horse to the crater, and marvel at the active volcano, an experience that combines adventure, awe, and cultural immersion.',
                        'image' => 'day1-bromo.jpg',
                        'image_title' => 'Sunrise over Bromo',
                        'image_description' => 'Golden light illuminating the dramatic Bromo crater, perfect for capturing cinematic photos.',
                    ],
                    [
                        'title' => 'Day 2 - Journey to Ijen Crater',
                        'description' => 'Depart after breakfast for Ijen, enjoying scenic stops along the way to appreciate the diverse East Java countryside. Upon arrival, gear up for the famous night hike to the Ijen crater. Experience the thrill as you ascend through volcanic terrain under the starry sky. Witness the mesmerizing blue flames emerging from sulfur vents, a natural phenomenon that leaves travelers in awe. Learn about the lives of local miners who risk their safety daily to harvest sulfur. Take in the striking contrast of turquoise acidic waters surrounded by rugged crater walls, making for unforgettable photographs and memories.',
                        'image' => 'day2-ijen.jpg',
                        'image_title' => 'Blue Fire at Ijen',
                        'image_description' => 'Ethereal blue flames dancing over the Ijen crater, a natural spectacle not to be missed.',
                    ],
                    [
                        'title' => 'Day 3 - Return and Reflection',
                        'description' => 'After a hearty breakfast and a relaxed morning enjoying the serene surroundings, begin your journey back to your starting point, whether Bali or Surabaya. Along the way, reminisce about the breathtaking landscapes, cultural encounters, and adventurous hikes. Reflect on the golden sunrise, the volcanic ash fields, and the unforgettable blue flames that have left lasting impressions. Capture a few last photos, share stories with fellow travelers, and carry home memories of a journey that was both thrilling and soul-enriching.',
                        'image' => 'day3-return.jpg',
                        'image_title' => 'Bromo Morning View',
                        'image_description' => 'Peaceful morning at Bromo, perfect for reflection and photography.',
                    ],
                ],
            ],
            [
                'title'       => 'Tumpak Sewu – Bromo – Ijen Tour',
                'description' => 'Dive into a 4-day adventure through some of East Java’s most spectacular natural wonders. Begin with the majestic Tumpak Sewu waterfall, known for its cascading cliffs and lush surrounding forests. Journey to Bromo, where volcanic landscapes, sand seas, and crater peaks create a photographer’s paradise. End at Ijen crater, where the surreal blue flames and turquoise lake provide a once-in-a-lifetime experience. This tour is perfect for travelers seeking adventure, photography opportunities, cultural encounters, and the serene beauty of untouched landscapes. Each day is carefully curated to balance exploration, relaxation, and immersive experiences with local communities.',
                'route_name'  => 'tumpak-sewu-bromo-ijen',
                'status'      => 1,
                'image'       => 'tumpak-bromo-ijen.jpg',
                'days' => [
                    [
                        'title' => 'Day 1 - Bali to Tumpak Sewu',
                        'description' => 'Depart early morning from Bali and embark on a scenic drive across East Java. Upon arrival, marvel at the towering Tumpak Sewu waterfall, known as the “Thousand Waterfalls,” cascading dramatically into a verdant canyon below. Explore the surrounding forested paths, take in panoramic views, and learn about the unique ecosystem. Capture stunning photographs and immerse yourself in the sounds and serenity of one of Java’s most breathtaking natural landmarks.',
                        'image' => 'day1-tumpak.jpg',
                        'image_title' => 'Tumpak Sewu Waterfall',
                        'image_description' => 'Dramatic waterfall cascading amidst lush greenery, a nature photographer’s dream.',
                    ],
                    [
                        'title' => 'Day 2 - Bromo Exploration',
                        'description' => 'Travel to Bromo and prepare for the iconic sunrise experience. Witness the first light spilling over the volcanic landscape, highlighting the caldera, sand seas, and active volcanoes. Ride a horse or trek across the Sea of Sand, take breathtaking photographs, and interact with local villagers. Explore the crater rim and enjoy the ethereal beauty of mist, light, and volcanic smoke merging to create a mystical atmosphere.',
                        'image' => 'day2-bromo.jpg',
                        'image_title' => 'Bromo Sunrise',
                        'image_description' => 'Golden sunrise over volcanic peaks and sand seas, an unforgettable visual experience.',
                    ],
                    [
                        'title' => 'Day 3 - Ijen Crater Adventure',
                        'description' => 'Embark on the nighttime hike to Ijen crater. Ascend through volcanic terrain in the cool night air, guided safely with headlamps. Witness the captivating blue flames that emerge from the sulfur vents, a phenomenon unique to this volcano. Observe local miners as they carefully extract sulfur, gaining insight into their courageous daily lives. Capture the surreal landscape of turquoise crater lake and volcanic cliffs bathed in moonlight and flame.',
                        'image' => 'day3-ijen.jpg',
                        'image_title' => 'Blue Fire at Ijen',
                        'image_description' => 'Mystical blue flames illuminating the crater walls, an awe-inspiring natural phenomenon.',
                    ],
                    [
                        'title' => 'Day 4 - Return to Bali',
                        'description' => 'Enjoy a relaxed breakfast before beginning the return journey to Bali. Reflect on the extraordinary sights, the adrenaline-pumping hikes, and the cultural interactions. Share stories and photographs, savor the memories of cascading waterfalls, misty volcanoes, and the magical blue flames. This journey will leave an indelible mark on your heart and inspire future adventures.',
                        'image' => 'day4-return.jpg',
                        'image_title' => 'Scenic Road Back',
                        'image_description' => 'Panoramic landscapes during the journey back, perfect for reflecting on the adventure.',
                    ],
                ],
            ],
            [
                'title'       => 'Midnight Ijen Adventure',
                'description' => 'Experience the magic and mystery of Ijen crater at night with this unique adventure. Departing from Banyuwangi or Bali, journey through lush landscapes and charming villages before ascending the volcano under the starry night sky. Witness the ethereal blue flames and the turquoise crater lake, a truly once-in-a-lifetime experience. Ideal for adventurers, photographers, and anyone seeking a thrilling and memorable journey through East Java’s volcanic wonders.',
                'route_name'  => 'midnight-ijen-adventure',
                'status'      => 1,
                'image'       => 'midnight-ijen.jpg',
                'days' => [
                    [
                        'title' => 'Night Hike',
                        'description' => 'Begin your night hike from the base of Ijen in the cool evening air. As you ascend through volcanic terrain, enjoy the star-studded sky and the anticipation of the adventure ahead. Witness the surreal blue flames as you approach the crater, capturing photographs that will amaze friends and family. Learn about the traditional sulfur mining techniques from local guides, gaining insight into this challenging and fascinating profession.',
                        'image' => 'night-hike.jpg',
                        'image_title' => 'Night Climb',
                        'image_description' => 'Adventurers making their way up Ijen crater under the mesmerizing night sky.',
                    ],
                    [
                        'title' => 'Sunrise & Return',
                        'description' => 'Reach the summit just in time for a spectacular sunrise. The crater lake glows with turquoise brilliance as the morning light enhances the volcanic landscape. Reflect on the experience, take in the crisp mountain air, and savor the sense of accomplishment. Begin the descent and journey back to your starting point, carrying memories, stories, and photographs that will last a lifetime.',
                        'image' => 'sunrise-return.jpg',
                        'image_title' => 'Ijen Sunrise',
                        'image_description' => 'Golden morning light illuminating Ijen crater, a perfect end to an unforgettable adventure.',
                    ],
                ],
            ],
        ];

        foreach ($blogs as $blogData) {
            $blog = Blog::create([
                'title'       => $blogData['title'],
                'slug'        => Str::slug($blogData['title']),
                'description' => $blogData['description'],
                'route_name'  => $blogData['route_name'],
                'image'       => $blogData['image'],
                'status'      => $blogData['status'],
            ]);

            foreach ($blogData['days'] as $day) {
                BlogDay::create([
                    'blog_id'           => $blog->id,
                    'title'             => $day['title'],
                    'description'       => $day['description'],
                    'image'             => $day['image'],
                    'image_title'       => $day['image_title'],
                    'image_description' => $day['image_description'],
                ]);
            }
        }
    }
}
