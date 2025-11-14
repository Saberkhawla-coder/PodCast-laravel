<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'user_id', 'title', 'description', 'image_path', 'genre', 'is_published'
            'user_id'=>User::factory(),
            'title'=>fake()->sentence(4),
            'description'=>fake()->paragraph(),
            'image_path'=>fake()->imageUrl(640, 480, 'podcast', true),
            'genre'=>fake()->randomElement(['Technology', 'Music', 'Education', 'Comedy', 'News']),
            'is_published'=>fake()->boolean(80)

        ];
    }
}
