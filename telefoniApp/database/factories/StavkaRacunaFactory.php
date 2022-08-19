<?php

namespace Database\Factories;

use App\Models\Racun;
use App\Models\Telefon;
use Illuminate\Database\Eloquent\Factories\Factory;

class StavkaRacunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'telefon' => $this->faker->numberBetween( 1,Telefon::count()),
            'racun' => $this->faker->numberBetween( 1,Racun::count()),
            
            'kolicina' => $this->faker->numberBetween($min=1,$max=10),

           
        ];
    }
}
