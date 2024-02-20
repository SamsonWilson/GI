<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ville>
 */
class villeFactory extends Factory
{
    protected $model = Ville::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->name(),
            "description" => $this->faker->name(),
            "imageville" => "",

        ];
    }
}