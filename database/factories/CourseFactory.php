<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'subject_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'class_format' => $this->faker->numberBetween($min = 0, $max = 3),
            'course_year' => 2021,            
            'course_section' => $this->faker->numberBetween($min = 1, $max = 16), //yearとsectionの組み合わせをユニークにしたい/春：13、夏：14、冬：15、増コマ：16
            'course_quantity' => $this->faker->numberBetween($min = 1, $max = 12),
        ];
    }
}
