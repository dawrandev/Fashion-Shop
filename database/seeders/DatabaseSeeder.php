<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'shoe'
        ]);
        Category::create([
            'name' => 'shirt'
        ]);
        Category::create([
            'name' => 'pant'
        ]);
        Category::create([
            'name' => 'jacket'
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Nike',
            'image' => 'shoe-1.jpg'
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Asos Design',
            'image' => 'shirt-1.jpg'
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Asos',
            'image' => 'shirt-2.jpg'
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Blue Pant',
            'image' => 'pant-1.jpg'
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Black Pant',
            'image' => 'pant-2.jpg'
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Leather Jacket',
            'image' => 'jacket-1.png'
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'adidas',
            'image' => 'shoe-2.jpg'
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Loro Piano',
            'image' => 'shoe-3.jpg'
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Core',
            'image' => 'shirt-3.jpg'
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Versus Pant',
            'image' => 'pant-3.jpg'
        ]);
        Price::create([
            'category_id' => 1,
            'product_id' => 1,
            'price' => "200000"
        ]);
        Price::create([
            'category_id' => 2,
            'product_id' => 2,
            'price' => "150000"
        ]);
        Price::create([
            'category_id' => 2,
            'product_id' => 3,
            'price' => "199000"
        ]);
        Price::create([
            'category_id' => 3,
            'product_id' => 4,
            'price' => "500000"
        ]);
        Price::create([
            "category_id" => 3,
            "product_id" => 5,
            "price" => "275000"
        ]);
        Price::create([
            'category_id' => 4,
            'product_id' => 6,
            'price' => "350000"
        ]);
        Price::create([
            'category_id' => 1,
            'product_id' => 7,
            'price' => "225000"
        ]);
        Price::create([
            'category_id' => 1,
            'product_id' => 8,
            'price' => "399000"
        ]);
        Price::create([
            'category_id' => 2,
            'product_id' => 9,
            'price' => "299000"
        ]);
    }
}
