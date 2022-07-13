<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'describe' => $this->faker->text(),
            'image' => $this->faker->imageUrl(640, 480),
            'price' => $this->faker->numberBetween(5000, 50000)
        ];
    }
}
