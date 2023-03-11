<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
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
        $listUser = User::pluck('id');
        return [
            'user_id' => fake()->randomElement($listUser),
            'caption' => fake()->text($maxNbChars = 200),
            'image_url' => fake()->imageUrl($width = 250, $height = 250),
            'video_url' => fake()->imageUrl($width = 250, $height = 250),
            'view' => 0,
            'status' => fake()->randomElement(['All','Me','Friend']),
        ];
    }
}
