<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kunjungan>
 */
class KunjunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tgl_kunjungan' => Carbon::now()->subDays(rand(0, 13)),
            'like_male' => $this->faker->numberBetween(50, 400),
            'like_female' => $this->faker->numberBetween(50, 400),
        ];
    }
}
