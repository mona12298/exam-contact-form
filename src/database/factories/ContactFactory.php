<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
{
    return [
        'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        'first_name'  => $this->faker->firstName,
        'last_name'   => $this->faker->lastName,
        'gender'      => $this->faker->randomElement([1, 2, 3]),
        'email'       => $this->faker->unique()->safeEmail,
        'tel1'        => $this->faker->numberBetween(0, 999),
        'tel2'        => $this->faker->numberBetween(0, 9999),
        'tel3'        => $this->faker->numberBetween(0, 9999),
        'address'     => $this->faker->address,
        'building'    => $this->faker->optional()->secondaryAddress,
        'detail'      => $this->faker->paragraph,
    ];
}

}
