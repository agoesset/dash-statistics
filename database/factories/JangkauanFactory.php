<?php

namespace Database\Factories;

use Carbon\Carbon;
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
        // Mengatur tanggal untuk 14 hari terakhir
        return [
            'tgl_jangkauan' => Carbon::now()->subDays(rand(0, 13)),
            'jakpus' => $this->faker->numberBetween(100, 1000),
            'jakbar' => $this->faker->numberBetween(100, 1000),
            'jaktim' => $this->faker->numberBetween(100, 1000),
            'jaksel' => $this->faker->numberBetween(100, 1000),
            'jakut' => $this->faker->numberBetween(100, 1000),
            'kepser' => $this->faker->numberBetween(50, 500),
        ];
    }
}
