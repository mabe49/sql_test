<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_last_name' => $this->faker->lastName,
            'student_first_name' => $this->faker->firstName,
            'student_school' => $this->faker->randomElement($array = array ('麻布','開成','巣鴨', '武蔵', '広尾')),
            'student_grade' => $this->faker->numberBetween($min = 0, $max = 12),     
            'student_status' => $this->faker->numberBetween($min = 0, $max = 3), 
        ];
    }
}
