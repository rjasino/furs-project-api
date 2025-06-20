<?php

namespace Database\Seeders;

use App\Models\Breed;
use App\Models\Species;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed breeds
        Breed::factory(env('MAX_BREED_FACTORY'))->create();

        // Assign species on each breed
        $breeds = Breed::all();
        foreach ($breeds as $breed) {
            $randomSpecies = Species::inRandomOrder()->first();
            $breed->species()->attach($randomSpecies);
        }
    }
}
