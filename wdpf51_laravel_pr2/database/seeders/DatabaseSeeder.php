<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use App\Models\product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        product::factory(100)->create();

        //  User::factory(10)->create();

        // For Calling Seeder

        //$this->call([
        //ProductSeeder::class,
        // ]);
    }
}
