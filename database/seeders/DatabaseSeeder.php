<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'HanifR',
        //     'email' => 'hanifridal17@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Joy Anggara',
        //     'email' => 'joy17@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Ut aut, nulla quis voluptate animi consectetur illum, temporibus natus commodi consequuntur fuga ipsam omnis tempora cum tenetur laboriosam, praesentium non. Eligendi molestias, beatae, atque quasi delectus voluptates ad sed maxime optio ratione, architecto suscipit aperiam consequuntur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Ut aut, nulla quis voluptate animi consectetur illum, temporibus natus commodi consequuntur fuga ipsam omnis tempora cum tenetur laboriosam, praesentium non. Eligendi molestias, beatae, atque quasi delectus voluptates ad sed maxime optio ratione, architecto suscipit aperiam consequuntur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Ut aut, nulla quis voluptate animi consectetur illum, temporibus natus commodi consequuntur fuga ipsam omnis tempora cum tenetur laboriosam, praesentium non. Eligendi molestias, beatae, atque quasi delectus voluptates ad sed maxime optio ratione, architecto suscipit aperiam consequuntur.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Ut aut, nulla quis voluptate animi consectetur illum, temporibus natus commodi consequuntur fuga ipsam omnis tempora cum tenetur laboriosam, praesentium non. Eligendi molestias, beatae, atque quasi delectus voluptates ad sed maxime optio ratione, architecto suscipit aperiam consequuntur.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
