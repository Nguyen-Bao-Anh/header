<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->numberBetween(0, 10),
            'title' => $this->faker->text(200),
            'time' => rand(1, 5),
            'describe' => $this->faker->text(255),
        ];
    }
}
