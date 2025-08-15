<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() { 
        $featuredProducts = [
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12?q=80&w=387&auto=format&fit=crop',
                'name' => 'Butter Croissant',
                'description' => 'Pastry klasik Prancis dengan lapisan mentega yang harum dan renyah.',
                'price' => 'Rp 18.000'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1598373182133-52452f7691ef?q=80&w=2070&auto=format&fit=crop',
                'name' => 'Sourdough Bread',
                'description' => 'Roti artisan dengan fermentasi alami yang baik untuk pencernaan.',
                'price' => 'Rp 45.000'
            ]
        ];
        return view('pages.home', ['featuredProducts' => $featuredProducts]); 
    }
    public function products() { 
        $categories = [
            [
                'id' => 'roti',
                'title' => 'Aneka Roti',
                'products' => [
                    [
                        'image' => 'https://images.unsplash.com/photo-1598373182133-52452f7691ef?q=80&w=2070&auto=format&fit=crop',
                        'name' => 'Sourdough Bread',
                        'description' => 'Roti sehat dengan fermentasi alami, renyah di luar, empuk di dalam.',
                        'price' => 'Rp 45.000',
                    ],
                    [
                        'image' => 'https://cdn.pixabay.com/photo/2022/07/29/17/50/loaf-7352306_1280.jpg',
                        'name' => 'Whole Wheat Loaf',
                        'description' => 'Roti gandum utuh yang kaya serat dan nutrisi untuk gaya hidup sehat.',
                        'price' => 'Rp 38.000',
                    ],
                ],
            ],
            [
                'id' => 'pastry-kue',
                'title' => 'Pastry & Kue',
                'products' => [
                    [
                        'image' => 'https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12?q=80&w=387&auto=format&fit=crop',
                        'name' => 'Butter Croissant',
                        'description' => 'Pastry klasik Prancis dengan lapisan mentega yang harum dan renyah.',
                        'price' => 'Rp 18.000',
                    ],
                    [
                        'image' => 'https://plus.unsplash.com/premium_photo-1713719224048-5dde0b2424ed?q=80&w=387&auto=format&fit=crop',
                        'name' => 'Red Velvet Slice',
                        'description' => 'Potongan kue red velvet mewah dengan lapisan cream cheese frosting.',
                        'price' => 'Rp 35.000',
                    ],
                    [
                        'image' => 'https://plus.unsplash.com/premium_photo-1673282157352-7b385a1d9ed7?q=80&w=402&auto=format&fit=crop',
                        'name' => 'Cinnamon Roll',
                        'description' => 'Roti gulung kayu manis yang lembut dengan glasir manis di atasnya.',
                        'price' => 'Rp 22.000',
                    ],
                    [
                        'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=1989&auto=format&fit=crop',
                        'name' => 'Dark Choco Cake',
                        'description' => 'Kue cokelat pekat yang memanjakan lidah para pecinta cokelat sejati.',
                        'price' => 'Rp 40.000',
                    ],
                ],
            ],
        ];
        
        return view('pages.products', compact('categories')); 
    }
    public function about() { return view('pages.about'); }
    public function cart() { return view('pages.cart'); }
    public function checkout() { return view('pages.checkout'); }
}
