<?php

namespace Database\Factories;
use App\Models\Pagina;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagina>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

        protected $model=Pagina::class;

    public function definition(): array
    {
        // sentence es una oración
        // Se debe de respetar el tipo de datos definidos en la base de datos
        return [
            //
            'name' => $this->faker->sentence(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => $this->faker->optional()->dateTime(),
            'password' => Hash::make('password'),
            'avatar' => $this->faker->optional()->imageUrl(200, 200,'people'), // puede ser nulo
            'telefono' => $this->faker->phoneNumber(),
            'calle' => $this->faker->streetAddress(),
            'is_active' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
