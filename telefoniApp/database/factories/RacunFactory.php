<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RacunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datum' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null) ,
            'adresa' => $this->faker->address() 
           
        ];
    }
}
