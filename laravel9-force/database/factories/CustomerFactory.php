<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' => $this->faker->realTextBetween(25,45),
           'email' => $this->faker->realTextBetween(100,150),
           'password' => $this->faker->password(),
           'email_verified_at' => now(),
        ];
    }
}
