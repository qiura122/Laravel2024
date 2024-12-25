<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Judul 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
        //     Eligendi, eius. Ipsa impedit ea non deserunt, fugiat exercitationem ex.
        //     Sapiente eveniet delectus eius modi perspiciatis vel similique maiores
        //     ea non repudiandae.'          
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
