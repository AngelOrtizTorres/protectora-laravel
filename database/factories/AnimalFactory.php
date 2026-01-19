<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {

        $razasPorEspecie = [
        'Perro' => ['Labrador', 'Golden Retriever', 'Pastor Alemán', 'Bulldog', 'Poodle'],
        'Gato' => ['Maine Coon', 'Siamés', 'Sphynx'],
        'Ave' => ['Canario', 'Periquito', 'Ninfa', 'Agapornis']
    ];

    $especie = $this->faker->randomElement(array_keys($razasPorEspecie));
    $nombreRaza = $this->faker->randomElement($razasPorEspecie[$especie]);

        return [
            'nombre' => fake()->firstName(),
            'raza' => $nombreRaza,
            'fechaNacimiento' => fake()->date('Y-m-d', $max = 'now')
        ];
    }
}
