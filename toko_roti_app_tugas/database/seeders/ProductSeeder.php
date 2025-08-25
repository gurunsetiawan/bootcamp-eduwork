<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Croissant',
                'description' => 'Flaky, buttery pastry.',
                'price' => 2.50,
                'stock' => 100,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIvfeqs26sP99xRaK4iEYQObuDGUe3bDZNTQ&s',
                'category_id' => 1, // Pastry
            ],
            [
                'name' => 'Baguette',
                'description' => 'Classic French bread with a crispy crust.',
                'price' => 3.00,
                'stock' => 75,
                'image' => 'https://images.pexels.com/photos/461060/pexels-photo-461060.jpeg?auto=compress&cs=tinysrgb&w=600',
                'category_id' => 2, // Bread
            ],
            [
                'name' => 'Chocolate Cake',
                'description' => 'Rich and moist chocolate cake.',
                'price' => 25.00,
                'stock' => 20,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK6CdUO8nPM0vEn7_XFdV0s2LhOppS2y79Qg&s',
                'category_id' => 3, // Cake
            ],
            [
                'name' => 'Oatmeal Raisin Cookies',
                'description' => 'Chewy cookies with oats and raisins.',
                'price' => 1.50,
                'stock' => 150,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ25rUf9y95mYaaGZ26i1gFWglka6OznhyI2Q&s',
                'category_id' => 4, // Cookies
            ],
            [
                'name' => 'Espresso',
                'description' => 'Strong, concentrated coffee.',
                'price' => 3.50,
                'stock' => 200,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxRyrOBtO0QLi8CsI83v-fY9pW_nGtRi7_Fg&s',
                'category_id' => 5, // Beverages
            ],
            [
                'name' => 'Sourdough Bread',
                'description' => 'Artisan sourdough bread with a tangy flavor.',
                'price' => 4.00,
                'stock' => 60,
                'image' => 'https://live.staticflickr.com/7284/8742390414_2d63108e5e_b.jpg',
                'category_id' => 2, // Bread
            ],
            [
                'name' => 'Iced Latte',
                'description' => 'Chilled espresso with milk and ice.',
                'price' => 4.50,
                'stock' => 100,
                'image' => 'https://media.easy-peasy.ai/27feb2bb-aeb4-4a83-9fb6-8f3f2a15885e/b0cd8143-3ba5-41b0-a0ff-a41b6f43642b.png',
                'category_id' => 5, // Beverages
            ],
            [
                'name' => 'Red Velvet Cake',
                'description' => 'Moist red velvet cake with cream cheese frosting.',
                'price' => 30.00,
                'stock' => 15,
                'image' => 'https://live.staticflickr.com/5224/5679555326_1530c02390_z.jpg',
                'category_id' => 3, // Cake
            ],
            [
                'name' => 'Tiramisu',
                'description' => 'Classic Italian dessert with coffee and mascarpone.',
                'price' => 28.00,
                'stock' => 10,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Tiramisu_with_blueberries_and_raspberries%2C_July_2011.jpg',
                'category_id' => 3, // Cake
            ]
        ]);
    }
}