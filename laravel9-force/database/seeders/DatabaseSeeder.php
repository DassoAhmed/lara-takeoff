<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
            'name' => 'Ahmed',
            'email' => 'dassoahmed@gmail.com',
            'password' => bcrypt('dass123'),
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Property::factory(50)->create();

        \App\Models\Customer::factory(10)->create();

        \App\Models\Post::factory(20)->create();

        \App\Models\Supplier::factory(10)->create();

        \App\Models\Sale::factory(50)->create();




    }
}
