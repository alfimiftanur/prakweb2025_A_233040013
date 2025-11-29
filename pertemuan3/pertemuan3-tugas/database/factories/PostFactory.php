<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    
    public function definition(): array
    {
        $title = fake()->sentence(4);
            $userId = \App\Models\User::inRandomOrder()->value('id');
            $categoryId = \App\Models\category::inRandomOrder()->value('id');
            return [
                'user_id' => $userId,
                'category_id' => $categoryId,
                'title' => $title,
                'slug' => Str::slug($title),
                'excerpt' => fake()->paragraph(2),
                'body' => fake()->paragraphs(3, true),
                'image' => null
            ];
    }
}