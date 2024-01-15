<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Human>
 */
class HumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        
        return [
            'FirstName'=>$this->faker->FirstName(),
            'LastName'=>$this->faker->LastName(),
            'PhoneNumber'=>$this->faker->phonenumber(),
            'Street'=>$this->faker->address(),
            'City'=>$this->faker->city(),
            'Country'=>$this->faker->country()

        ];
    }
}
