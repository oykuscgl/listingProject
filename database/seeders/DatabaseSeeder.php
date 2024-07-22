<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        // Admin kullanıcı oluşturma
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpassword'),
            'role' => 'admin',
        ]);
        */

        $this->call([
            CategorySeeder::class,
            //ProductsTableSeeder::class,
            //RecipeSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
        ]);

    }
}
