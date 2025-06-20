<?php

namespace Database\Factories;

use App\Models\Species;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
class BreedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $selectedSpecies = Species::inRandomOrder()->first();
        if (!$selectedSpecies) {
            echo 'Seed Species first.';
        }
        //seed only cat, dog, fish, bird
        $breed = 'default breed';
        switch ($selectedSpecies) {
            case 'dog':
                $breed = fake()->animal->dog();
                break;
            case 'cat':
                $breed = fake()->animal->cat();
                break;
            case 'bird':
                $breed = fake()->animal->bird();
                break;
            case 'fish':
                $breed = fake()->animal->fish();
                break;
            default;
        }
        return [
            "name" => $breed
        ];
    }
}
