<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('123456789D'), // password
            'remember_token' => Str::random(10),
            'dni' => $this->faker->isbn10(),
            'phone' => $this->faker->phoneNumber,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'type' => 'Usuario',
            'Bir_Date' => $this->faker->date('Y-m-d','now'),
            'addresses_id'=> $this->faker->numberBetween(1,60)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}