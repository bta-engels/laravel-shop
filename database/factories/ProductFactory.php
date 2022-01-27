<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function Symfony\Component\Translation\t;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'manufacturer_id' => 1,
            'name' => $this->faker->name,
            'description' => $this->faker->text
        ];
    }
}
