<?php

namespace Database\Factories;

use App\Models\Turf;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'turf_id' => Turf::factory(),
            'start_date_time' => $this->faker->dateTime(),
            'end_date_time' => $this->faker->dateTimeBetween('now', '+01 days'),
            'price' => $this->faker->randomNumber(2)
        ];
    }
}
