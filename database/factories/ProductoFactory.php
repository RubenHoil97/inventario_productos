<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->nombre(),
            'descripcion' => $this->faker->descripcion(),
            'precio' => $this->faker->precio()
        ];
    }
}
