<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Visitor User',
            'email' => 'visitor@example.com',
            'password' => bcrypt('password'),
            'role' => 'visitor',
        ]);

        $category = Category::create([
            'name' => 'Teknologi',
        ]);

        Book::create([
            'title' => 'Laravel Untuk Pemula',
            'category_id' => $category->id,
            'user_id' => $admin->id,
        ]);
    }
}
