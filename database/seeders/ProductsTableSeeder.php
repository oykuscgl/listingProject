<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $categoryIds = Category::pluck('id'); // Kategorilerin mevcut ID'lerini al


    Product::create([
        'name' => 'Carat Kakao',
        'stock' => 10,
        'price' => 106,
        'category_id' => 3,
    ]);

    Product::create([
        'name' => 'Carat Cover Bitter',
        'stock' => 10,
        'price' => 106,
        'category_id' => 3,
    ]);

    Product::create([
        'name' => 'Carat Cover Sütlü',
        'stock' => 10,
        'price' => 106,
        'category_id' => 3,
    ]);

    Product::create([
        'name' => 'Brillo Karamel',
        'stock' => 10,
        'price' => 106,
        'category_id' => 2,
    ]);

    Product::create([
        'name' => 'Brillo Vişne',
        'stock' => 10,
        'price' => 106,
        'category_id' => 2,
    ]);

    Product::create([
        'name' => 'Brillo Kakao',
        'stock' => 10,
        'price' => 106,
        'category_id' => 2,
    ]);

    Product::create([
        'name' => 'Sapore Aroldo',
        'stock' => 10,
        'price' => 106,
        'category_id' => 1,
    ]);

    Product::create([
        'name' => 'Easy Geleneksel',
        'stock' => 10,
        'price' => 106,
        'category_id' => 1,
    ]);
}
}
