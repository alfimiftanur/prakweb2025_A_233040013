<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Muhammad Pele', 'username' => 'muhammad_pele', 'email' => 'pele@example.com'],
            ['name' => 'Lamine Yamal', 'username' => 'lamine_yamal', 'email' => 'yamal@example.com'],
            ['name' => 'Cristiano Ronaldo', 'username' => 'cristiano_ronaldo', 'email' => 'ronaldo@example.com'],
            ['name' => 'Mbappe', 'username' => 'mbappe', 'email' => 'mbappe@example.com'],
            ['name' => 'Doni Hermawan', 'username' => 'doni_hermawan', 'email' => 'doni@example.com'],
        ];

        foreach ($users as $userData) {
            User::create([
                'name' => $userData['name'],
                'username' => $userData['username'],
                'email' => $userData['email'],
                'password' => bcrypt('password'),
            ]);
        }

        Category::factory(2)->create();
        Post::factory(10)->recycle(User::all())->recycle(Category::all())->create();
    }
}