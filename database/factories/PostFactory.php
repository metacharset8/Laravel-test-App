<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name(),
            "description" => $this->faker->text(),
            "preview" =>  $this->faker->text(50),
            "thumbnnail" =>  $this->faker->image ("posts"),
        ];
    }
}
