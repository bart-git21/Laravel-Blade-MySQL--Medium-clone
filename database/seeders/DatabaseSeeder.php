<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'user123',
            'username' => 'user123',
            'email' => '123@m.ru',
            'password' => 'user123@',
        ]);

        $categories = [
            'Technology',
            'Science',
            'Health',
            'Business',
            'Entertainment',
            'Sports',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
