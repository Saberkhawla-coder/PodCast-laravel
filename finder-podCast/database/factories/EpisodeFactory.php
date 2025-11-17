<?php

namespace Database\Factories;

use App\Models\Podcast;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'podcast_id', 'title', 'description', 'audio_path', 'is_published'
            'title'=>fake()->sentence(2),
            'description'=>fake()->paragraph(),
            'audio_path'=>fake()->url(),
            'is_published'=>fake()->boolean(80)

        ];
    }
}
