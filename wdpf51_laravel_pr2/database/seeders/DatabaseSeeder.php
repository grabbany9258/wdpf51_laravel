<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Role;

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

        // For Post & Comments seeder

        // post seeder
        for ($i = 1; $i <= 15; $i++) {
            $post = new Post();
            $post->name = 'Sample Post - ' . $i;

            $post->save();
        }

        for ($i = 1; $i <= 50; $i++) {
            $comment = new Comment();
            $comment->post_id = rand(1, 15);
            $comment->comment = 'Comment - ' . $i;

            $comment->save();
        }

        // Eloquent Many to many seeder for roles

        $roles = ['superadmin', 'admin', 'manager', 'editor', 'contributor', 'subscriber', 'user'];
        foreach ($roles as $role) {
            $u_role = new Role();
            $u_role->name = $role;
            $u_role->save();
        }
    }
}
