<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // JSON formatında description içeriği oluştur
        $description = [
            ['ingredient' => 'Whole egg', 'amount' => '250g'],
            ['ingredient' => 'Vegetable oil', 'amount' => '100g'],
            ['ingredient' => 'Water', 'amount' => '120g'],
            ['ingredient' => 'Festipak', 'amount' => '500g'],
            ['ingredient' => 'Belcolade Blanc Selection', 'amount' => '400g'],
            ['ingredient' => 'Cremfil Raspberry', 'amount' => '75g'],
            ['ingredient' => 'Butter', 'amount' => '50g'],
            ['ingredient' => 'Carat Cover White', 'amount' => '500g'],
            ['ingredient' => 'Belcolade cocoa butter', 'amount' => '50g'],
            ['ingredient' => 'Oil-based red coloring', 'amount' => '5g'],
        ];

        // Seeder ile tabloya veri ekleme
        Recipe::create([
            'title' => 'CİLEKLİ NOEL PASTA',
            'description' => json_encode($description),
            'category' => 'pastry',
            'detailed_info' => 'For the Cake
            Mix all ingredients in a mixer at medium speed for 3 minutes. Pour the prepared mixture into a baking tray lined with a silpat and spread evenly. Bake in a preheated oven at 170˚C for 9-10 minutes.

            For the Ganache

            Heat Festipak with butter until it reaches boiling point. Add Belcolade Blanc Selection and stir. After adding Cremfil Frambuaz, let the mixture cool. Whip the cooled mixture in a mixer for 3-4 minutes. Adjust the consistency with Festipak as desired.

            For Decoration

            Melt all ingredients in a microwave or using a double boiler until they reach 38˚C. Temper the mixture until it reaches 32˚C and shape using acetate paper. Place the cake inside the shaped chocolate decoration. Pipe the ganache on top and seal. Repeat this process twice. Decorate with strawberries.',
            'image' => 'public/images/strawberrycake.jpeg',
        ]);
    }
}
