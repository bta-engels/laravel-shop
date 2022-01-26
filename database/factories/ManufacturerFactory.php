<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Manufacturer;

class ManufacturerFactory extends Factory
{
    protected $model = Manufacturer::class;
    /**
     * Define the model's default state.
     *
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' =>$this->faker->text
        ];
    }
}
