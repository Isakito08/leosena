<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Egresado>
 */
class EgresadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'ficha' => $this->faker->word,
            'programa' => $this->faker->word,
            'nis' => $this->faker->word,


            'registro' => $this->faker->word,
            'tipo_documento' => $this->faker->word,


            'num_documento' => $this->faker->word,


            'nombre' => $this->faker->name,
            'residencia' => $this->faker->word,
            'correo' => $this->faker->email,
            'telefono' => $this->faker->phoneNumber,
            'telefono_al' => $this->faker->phoneNumber,
            'celular' => $this->faker->phoneNumber,


            'año' => $this->faker->word,
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),

        ];
    }
}
