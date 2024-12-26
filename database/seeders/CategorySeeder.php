<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'A.I',
            'slug' => 'ai'
        ]);

        Category::create([
            'name' => 'UI-UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'name' => 'Database',
            'slug' => 'database'
        ]);

        Category::create([
            'name' => 'Cloud-Computing',
            'slug' => 'cloud-computing'
        ]);
    }
}
