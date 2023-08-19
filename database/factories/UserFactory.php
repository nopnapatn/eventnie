<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

            'student_id' => fake()->numberBetween(1000000000, 9999999999),
            'faculty' => Str::random(10),
            'major' => Str::random(10),
            'college_year' => fake()->numberBetween(1, 5),
            'phone_number' => fake()->phoneNumber(),
            'allergic_food' => Str::random(10),
            'joined_event_count' => fake()->numberBetween(0, 10),
            
            'bio' => fake()->paragraph(),
            'profile_picture' => fake()->image('public/storage/', 800, 600, null, false),

            'is_admin' => false,
            'can_create_event' => fake()->boolean(),
            
            // 'created_at' => now(),
            // 'updated_at' => now(),
            // 'deleted_at' => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
