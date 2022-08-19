<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TelefonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement('samsung galaxy s22','samsung galaxy s21','samsung galaxy s22+','iphone 12','iphone 13'),
            'ekran' => $this->faker->randomElement('6.7','6.9','5.8','5.7','6.3'),
            'baterija' => $this->faker->randomElement('5000','6000'),
            'os' => $this->faker->randomElement('android 11','android 10','ios'),
            'boja' => $this->faker->randomElement('crna','siva','plava','crvena'),
            'cena' => $this->faker->numberBetween($min=100000,$max=250000),

           
        ];
    }
}
