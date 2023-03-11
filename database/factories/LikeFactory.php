<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $listUser = User::pluck('id');
        $listPost = Post::pluck('id');

        return [
            'user_id' => fake()->randomElement($listUser),
            'post_id' => fake()->randomElement($listPost),
        ];
    }
}
