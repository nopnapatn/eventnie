<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'type' => $this->faker->randomElement(['workshop', 'seminar', 'talk', 'webinar']),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->address(),
            'contact' => $this->faker->phoneNumber(),
            'start_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_at' => $this->faker->dateTimeBetween('+1 month', '+2 month'),
            'image_path' => $this->faker->image('public/storage/', 800, 600, null, false),
            'max_attendees' => $this->faker->numberBetween(10, 100),
            'is_full' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(['active', 'got problem']),
            'creator_id' => User::inRandomOrder()->first()->id,
            // 'organizer_id' => User::inRandomOrder()->first()->id,
            // 'creator_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
