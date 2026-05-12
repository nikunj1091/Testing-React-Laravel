<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80',
                'brand' => 'Nike',
                'title' => 'Nike Air Max 270 (Men)',
                'rating' => 4.5,
                'reviews' => 850,
                'sellPrice' => 150.00,
                'orders' => '2k+',
                'mrp' => '180.00',
                'discount' => 16,
                'category' => 'men',
            ],
            [
                'img' => 'https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=500&q=80',
                'brand' => 'Adidas',
                'title' => 'Adidas Classic Sneakers (Women)',
                'rating' => 4.7,
                'reviews' => 1200,
                'sellPrice' => 85.00,
                'orders' => '5k+',
                'mrp' => '100.00',
                'discount' => 15,
                'category' => 'women',
            ],
            [
                'img' => 'https://images.unsplash.com/photo-1514989940723-e8e51635b782?w=500&q=80',
                'brand' => 'Puma',
                'title' => 'Puma Kids Lightweight Shoes',
                'rating' => 4.4,
                'reviews' => 320,
                'sellPrice' => 45.00,
                'orders' => '1k+',
                'mrp' => '60.00',
                'discount' => 25,
                'category' => 'child',
            ],
        ];

        // Clear existing data to ensure only these 3 are present
        Product::truncate();

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
