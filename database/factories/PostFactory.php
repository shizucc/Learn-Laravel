<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>  fake()->sentence(4),
            'body' => collect(fake()->paragraphs(rand(5,10)))->map(fn($p)=> "<p>$p</p>")->implode(''),
            'excerpt' => fake()->sentence(10),
            'user_id' => rand(1,3),
            'category_id' => rand(1,3),
            'slug' => fake()->slug(3)
        ];
    }
}
