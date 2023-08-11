<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $family = Category::create([
            'name'=> 'Family',
            'slug'=> 'family'
        ]);
        $work = Category::create([
            'name'=> 'Work',
            'slug'=> 'work'
        ]);
        $hobby = Category::create([
            'name'=> 'Hobby',
            'slug'=> 'hobby'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id'=> $family->id,
            'title'=> 'My family post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, voluptate.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt possimus reprehenderit natus temporibus rerum ut optio! Vel quisquam, minus ea eligendi, dicta molestiae consectetur labore, nesciunt recusandae fugiat a!'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id'=> $work->id,
            'title'=> 'My work post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, voluptate.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt possimus reprehenderit natus temporibus rerum ut optio! Vel quisquam, minus ea eligendi, dicta molestiae consectetur labore, nesciunt recusandae fugiat a!'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id'=> $hobby->id,
            'title'=> 'My hobby post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, voluptate.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt possimus reprehenderit natus temporibus rerum ut optio! Vel quisquam, minus ea eligendi, dicta molestiae consectetur labore, nesciunt recusandae fugiat a!'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
