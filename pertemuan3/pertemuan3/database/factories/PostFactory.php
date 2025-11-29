<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    
    public function definition(): array
    {
        $title = fake()->sentence(4);
        return [
            'user_id' => \App\Models\User::factory(),
            'category_id' => \App\Models\category::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->paragraph(2),
            'body' => fake()->paragraphs(3, true),
            'image' => null
            
        ];
    }
}
