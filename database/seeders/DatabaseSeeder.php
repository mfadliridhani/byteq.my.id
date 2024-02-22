<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Home;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'M Fadli Ridhani',
            'username' => 'mfadliridhani',
            'email' => 'mfadliridhani@gmail.com',
            'password' => bcrypt('password')
        ]);

        Home::factory(1)->create();
        User::factory(10)->create();
        Blog::factory(10)->create();
        Category::factory(10)->create();
    }
}
