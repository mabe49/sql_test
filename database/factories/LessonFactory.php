<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->numberBetween($min = 1, $max = 200),
            'booth_id' => $this->faker->numberBetween($min = 1, $max = 1350),
            'lesson_status' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
