<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => $this->faker->boolean(),
            'comments' => $this->faker->sentence(),
            'pseudo' => $this->faker->userName,
            'player_id' => $this->faker->randomNumber(),
            'result' => $this->faker->boolean(),
            'game_id' => $this->faker->randomNumber(),
            'user_id' => 1
        ];
    }
}
