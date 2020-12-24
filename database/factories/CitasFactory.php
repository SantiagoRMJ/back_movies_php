<?php

namespace Database\Factories;

use App\Models\Citas;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'userId' => $this->faker->unique()->numberBetween($min = 1, $max = 5000),
        'title' => $this->faker->dateTime($max = 'now', $timezone = null),
        'createdAt'=> $this->faker->dateTime($max = 'now', $timezone = null),
        'returnDate' => $this->faker->dateTime($max = 'now', $timezone = null)
        ];
    }
}
