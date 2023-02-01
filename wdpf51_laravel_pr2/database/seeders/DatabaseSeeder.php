<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Phone;

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

        // for users 

        $user = new User();
        $user->name = 'Naymur Rahman';
        $user->email = 'naymur@example.com';
        $user->password = Hash::make('abcd1234');
        $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
        $user->name = 'Kamrul Hasan';
        $user->email = 'kamrul@example.com';
        $user->password = Hash::make('abcd1234');
        $user->remember_token = Str::random(10);
        $user->save();

        $phone = new Phone();
        $phone->user_id = 1;
        $phone->phone = 412412313;

        $phone->save();

        $phone = new Phone();
        $phone->user_id = 2;
        $phone->phone = 4124123131;

        $phone->save();
    }
}
