<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jangkauan>
 */
class JangkauanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hari' => $this->faker->randomElement([
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ]),
            'jakpus' => $this->faker->numberBetween(100, 1000),
            'jakbar' => $this->faker->numberBetween(100, 1000),
            'jaktim' => $this->faker->numberBetween(100, 1000),
            'jaksel' => $this->faker->numberBetween(100, 1000),
            'jakut' => $this->faker->numberBetween(100, 1000),
            'kepser' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
