<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();
        Category::factory(5)->create();
        Tag::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //    'email' => 'test@example.com',
       //  ]);
    }
}
