<?php

namespace Database\Factories;

use App\Models\Booth;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoothFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booth::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_id' => $this->faker->numberBetween($min = 1, $max = 15),
            'section_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'day_id' => $this->faker->numberBetween($min = 1, $max = 30),
        ];
    }
}
