<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notebook>
 */
class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'company' => $this->faker->company(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'date_of_birth' => $this->faker->dateTime(),
            'image' => $this->faker->image(),
        ];
    }
}
