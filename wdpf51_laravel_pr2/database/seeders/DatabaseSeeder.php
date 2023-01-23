<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;
use App\Models\Category;
use App\Models\User;

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
        Category::factory((100))->create();

        User::factory(1)->create();

        // For Calling Seeder

        //$this->call([
        //ProductSeeder::class,
        // ]);
    }
}
