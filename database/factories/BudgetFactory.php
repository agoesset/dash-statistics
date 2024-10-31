<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tgl_budget' => Carbon::today()->subDays(rand(0, 365)),
            'biaya_perviewers' => $this->faker->randomFloat(2, 0.1, 5.0),
            'total_dibelanjakan' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
