<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'name' => 'DLK Private Homestay ដេីមលាភ កំពត',
                'name_khmer' => 'ដេីមលាភ កំពត',
                'description' => 'Home base for your Kampot adventure. Comfortable accommodation with easy access to all the wonderful attractions in the area.',
                'google_map_link' => 'https://maps.app.goo.gl/eWy91DAhBY2JkBfV9',
                'icon' => '🏠',
                'distance_from_homestay' => null,
                'is_pinned' => true,
                'order' => 1
            ],
            [
                'name' => 'ដូងទេរ (Dong Te)',
                'name_khmer' => 'ដូងទេរ',
                'description' => 'A local attraction in Kampot Province. Experience authentic Cambodian culture and beautiful rural landscapes.',
                'google_map_link' => 'https://maps.app.goo.gl/Kt66Y9uxMEA7k7iJ7',
                'icon' => '🌴',
                'distance_from_homestay' => 10.3,
                'is_pinned' => false,
                'order' => 2
            ],
            [
                'name' => 'ភូមិថ្មីកំពត (Phum Thmei Kampot)',
                'name_khmer' => 'ភូមិថ្មីកំពត',
                'description' => 'A local village area in Kampot Province. Discover the traditional Cambodian village life and community.',
                'google_map_link' => 'https://maps.app.goo.gl/7AptLZSp63eFgqrA9',
                'icon' => '🏘️',
                'distance_from_homestay' => 8.0,
                'is_pinned' => false,
                'order' => 3
            ],
            [
                'name' => 'ជ្រលងវេហា (Chrolong Veha)',
                'name_khmer' => 'ជ្រលងវេហា',
                'description' => 'A historic and cultural site in Kampot Province. Explore the ancient architecture and spiritual heritage of the area.',
                'google_map_link' => 'https://maps.app.goo.gl/JxDoA4KkP8KqnZcFA',
                'icon' => '⛰️',
                'distance_from_homestay' => 10.0,
                'is_pinned' => false,
                'order' => 4
            ],
            [
                'name' => 'ឆ្នេរដូង',
                'name_khmer' => 'ឆ្នេរដូង',
                'description' => 'A beautiful coastal area in Kampot Province. Enjoy the seaside views and relaxing atmosphere.',
                'google_map_link' => 'https://maps.app.goo.gl/ZK6xub3GD5CX5Ayg9',
                'icon' => '🏖️',
                'distance_from_homestay' => 7.6,
                'is_pinned' => false,
                'order' => 5
            ],
            [
                'name' => 'ឆ្នេរអង្កោល (Angkol Beach)',
                'name_khmer' => 'ឆ្នេរអង្កោល',
                'description' => 'A scenic beach location in Kampot Province. Perfect for relaxation and enjoying the natural coastal beauty.',
                'google_map_link' => 'https://maps.app.goo.gl/Lxyc8x3AvJfsbasA9',
                'icon' => '🌊',
                'distance_from_homestay' => 36.7,
                'is_pinned' => false,
                'order' => 6
            ],
            [
                'name' => 'ទំនប់ម្លេច (Mlech Dam)',
                'name_khmer' => 'ទំនប់ម្លេច',
                'description' => 'A scenic dam and reservoir in Kampot Province. Great spot for nature lovers and enjoying the peaceful water views.',
                'google_map_link' => 'https://maps.app.goo.gl/kQ6huR8owe4hLxEk8',
                'icon' => '🏞️',
                'distance_from_homestay' => 57.1,
                'is_pinned' => false,
                'order' => 7
            ],
            [
                'name' => 'Starbucks Cafe',
                'name_khmer' => null,
                'description' => 'Enjoy your favorite coffee and snacks. Perfect spot for a break during your trip or morning coffee before exploring.',
                'google_map_link' => 'https://maps.app.goo.gl/UqP73C49pgXt2nwDA',
                'icon' => '☕',
                'distance_from_homestay' => 4.8,
                'is_pinned' => false,
                'order' => 8
            ],
            [
                'name' => 'កាហ្វេកំពូលភ្នំ (Kampot Top View)',
                'name_khmer' => 'កាហ្វេកំពូលភ្នំ',
                'description' => 'Spectacular mountain-top cafe with panoramic views of Kampot. Perfect for sunrise/sunset coffee with breathtaking scenery.',
                'google_map_link' => 'https://maps.app.goo.gl/Jz3hedyhpCGU5YTW8',
                'icon' => '🌄',
                'distance_from_homestay' => 13.2,
                'is_pinned' => false,
                'order' => 9
            ],
            [
                'name' => 'Veranda Natural Resort',
                'name_khmer' => null,
                'description' => 'A tranquil natural resort offering relaxation and comfort. Perfect accommodation surrounded by nature and peaceful atmosphere.',
                'google_map_link' => 'https://maps.app.goo.gl/9ujtMANkzyar46SaA',
                'icon' => '🏨',
                'distance_from_homestay' => 27.5,
                'is_pinned' => false,
                'order' => 10
            ],
            [
                'name' => 'កាហ្វេជ្រលងភ្នំ (Valley Coffee)',
                'name_khmer' => 'កាហ្វេជ្រលងភ្នំ',
                'description' => 'Charming valley cafe with serene mountain views. Perfect spot to enjoy coffee while surrounded by beautiful natural scenery.',
                'google_map_link' => 'https://maps.app.goo.gl/YiXwVWjZokep5Yxh8',
                'icon' => '☕',
                'distance_from_homestay' => 25.0,
                'is_pinned' => false,
                'order' => 11
            ],
            [
                'name' => 'ភ្នំទូកមាស (Touk Meas Mountain)',
                'name_khmer' => 'ភ្នំទូកមាស',
                'description' => 'Beautiful mountain with stunning views and hiking opportunities. A must-visit destination for nature lovers and adventure seekers.',
                'google_map_link' => 'https://maps.app.goo.gl/WvVNMeoLDp2cjdW87',
                'icon' => '⛰️',
                'distance_from_homestay' => 58.9,
                'is_pinned' => false,
                'order' => 12
            ],
            [
                'name' => 'Led Zep Cafe កាហ្វេលើភ្នំ',
                'name_khmer' => 'កាហ្វេលើភ្នំ',
                'description' => 'Mountain-top cafe with stunning panoramic views. A popular spot to relax, enjoy great coffee, and take in the breathtaking Kampot scenery.',
                'google_map_link' => 'https://maps.app.goo.gl/GgVUqThqNF4hKx186',
                'icon' => '☕',
                'distance_from_homestay' => 28.1,
                'is_pinned' => false,
                'order' => 13
            ],
            [
                'name' => 'Popokvil Waterfall ទឹកធ្លាក់​ពពកវិល',
                'name_khmer' => 'ទឹកធ្លាក់​ពពកវិល',
                'description' => 'A stunning natural waterfall surrounded by lush forest. Perfect for nature lovers seeking adventure and beautiful scenery in Kampot Province.',
                'google_map_link' => 'https://maps.app.goo.gl/EX6jpLWyfwM4jSY58',
                'icon' => '💧',
                'distance_from_homestay' => 43.0,
                'is_pinned' => false,
                'order' => 14
            ],
            [
                'name' => 'ថ្ម មុខយក្ស កាហ្វេ Cafe',
                'name_khmer' => 'ថ្ម មុខយក្ស កាហ្វេ',
                'description' => 'Unique cafe with distinctive rock formations and scenic views. A charming spot to enjoy coffee and experience the natural beauty of Kampot.',
                'google_map_link' => 'https://maps.app.goo.gl/b2uZpmcs6mQ1fn8V7',
                'icon' => '☕',
                'distance_from_homestay' => 20.4,
                'is_pinned' => false,
                'order' => 15
            ],
            [
                'name' => 'La Plantation',
                'name_khmer' => null,
                'description' => 'A beautiful pepper plantation and resort. Experience Kampot\'s famous pepper farms and enjoy the serene countryside atmosphere.',
                'google_map_link' => 'https://maps.app.goo.gl/ERTggJixuNoHFUe98',
                'icon' => '🌿',
                'distance_from_homestay' => 21.8,
                'is_pinned' => false,
                'order' => 16
            ],
            [
                'name' => 'Veal Pouch Waterfall ទឹកធ្លាក់វាលពួច',
                'name_khmer' => 'ទឹកធ្លាក់វាលពួច',
                'description' => 'A scenic natural waterfall surrounded by beautiful forest landscape. Perfect spot for nature exploration and enjoying the peaceful sounds of cascading water.',
                'google_map_link' => 'https://maps.app.goo.gl/Z7noFRAPZ1Jhi4KB8',
                'icon' => '💧',
                'distance_from_homestay' => 40.0,
                'is_pinned' => false,
                'order' => 17
            ],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
