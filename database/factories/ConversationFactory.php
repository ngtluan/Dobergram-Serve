<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conversation>
 */
class ConversationFactory extends Factory
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
            'user_1_id' => fake()->randomElement($listUser),
            'user_2_id' => fake()->randomElement($listUser),
            'last_message' => fake()->text($maxNbChars = 200)
        ];
    }
}
