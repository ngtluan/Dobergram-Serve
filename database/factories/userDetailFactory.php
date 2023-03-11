<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class userDetailFactory extends Factory
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
            'user_id' => fake()->unique()->randomElement($listUser),
            'avatar' => fake()->imageUrl($width = 50, $height = 50),
            'bio' => fake()->text($maxNbChars = 200),
            'date_of_birth' => fake()->date($format = 'Y-m-d', $max = '2010-03-01'),
            'gender' => fake()->randomElement(['Orther','Male','Female']),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'theme' => fake()->randomElement(['Light','Dark'])
        ];
    }
}
