<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {

        $rols = ['usuario', 'empleado', 'administrador', 'voluntario'];

        return [
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'telefono' => fake()->phoneNumber(),
            'password' => static::$password ??= Hash::make('password'),
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'direccion' => fake()->address(),
            'rol' => fake()->randomElement($rols)
        ];
    }
}
