<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faktur>
 */
class FakturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'nomor_faktur' => fake()->numberBetween(1, 1000000000000),
            'nama_nasabah' => fake()->name(),
            'nomor_rangka' => fake()->numberBetween(1, 10000000),
            'nomor_mesin' => fake()->numberBetween(1, 10000000),
            'kabupaten_id' => fake()->randomElement(['61', '388', '415']),
            'status_id' => fake()->numberBetween($min = 1, $max = 3),
            'created_at'=> fake()->dateTimeBetween($startDate = '-2 years', $endDate = 'now')
        ];
    }
}
