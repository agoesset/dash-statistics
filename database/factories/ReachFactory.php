<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reach>
 */
class ReachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tgl_reach' => Carbon::now()->subDays(rand(0, 13)),
            'value' => $this->faker->numberBetween(1000, 5000),
        ];
    }
}
