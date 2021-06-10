<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName'=> $this->faker->name,
            'lastName' => $this->faker->lastName,
            'day' => $this->faker->date,
            'pax' => $this->faker->numberBetween(1,8),
            'hour' => 'Almuerzo',
            'time' => $this->faker->time,
            'description' => $this->faker->text,
        ];
    }
}