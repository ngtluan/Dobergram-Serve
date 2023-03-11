<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Block>
 */
class BlockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $listUser = User::pluck("id");
        return [
            'user_id' => fake()->randomElement($listUser),
            'to_user_id' => fake()->randomElement($listUser)
        ];
    }
}
