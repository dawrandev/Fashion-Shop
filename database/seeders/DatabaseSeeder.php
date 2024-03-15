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
            'price' => "200000",
            'image' => 'shoe-1.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Asos Design',
            'price' => "150000",
            'image' => 'shirt-1.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Asos',
            'price' => "199000",
            'image' => 'shirt-2.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Blue Pant',
            'price' => "500000",
            'image' => 'pant-1.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Black Pant',
            "price" => "275000",
            'image' => 'pant-2.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Leather Jacket',
            'price' => "350000",
            'image' => 'jacket-1.png',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'adidas',
            'price' => "225000",
            'image' => 'shoe-2.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Loro Piano',
            'price' => "399000",
            'image' => 'shoe-3.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Core',
            'price' => "299000",
            'image' => 'shirt-3.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Versus Pant',
            'price' => "255000",
            'image' => 'pant-3.jpg',
            'text_1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'text_2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias debitis ratione quidem impedit laborum repellendus dignissimos! Odit omnis eos laborum qui magni sit, repellat asperiores reiciendis quibusdam, quis optio earum.',
            'image_1' => 'single-product-01.jpg',
            'image_2' => 'single-product-02.jpg',
            'pcs' => 10
        ]);

    }
}
