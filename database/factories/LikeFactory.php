<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'like_male' => $this->faker->numberBetween(50, 500),
            'like_female' => $this->faker->numberBetween(50, 500),
            'like_gen_alpha' => $this->faker->numberBetween(50, 500),
            'like_gen_z' => $this->faker->numberBetween(50, 500),
            'like_gen_millenial' => $this->faker->numberBetween(50, 500),
            'like_baby_boomer' => $this->faker->numberBetween(10, 100),
        ];
    }
}
