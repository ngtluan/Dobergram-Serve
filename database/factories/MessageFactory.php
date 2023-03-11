<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Conversation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $listUser = User::pluck("id");
        $listConversation = Conversation::pluck("id");
        return [
            'sender_id' => fake()->randomElement($listUser),
            'receiver_id' => fake()->randomElement($listUser),
            'conversation_id' => fake()->randomElement($listConversation),
            'content' => fake()->text($maxNbChars = 200),
            'media_url' => fake()->text($maxNbChars = 200),
            'status' => fake()->randomElement(['Enable','Disable','Block'])
        ];
    }
}
