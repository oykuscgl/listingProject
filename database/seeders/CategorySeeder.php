<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Ekmekçilik',
        ]);

        Category::create([
            'name' => 'Pastacılık',
        ]);

        Category::create([
            'name' => 'Çikolata',
        ]);

        // İhtiyaca göre daha fazla kategori ekleyebilirsiniz
    }
}
