<?php

namespace Database\Factories;

use App\Enums\AnimalStatus;
use App\Enums\Gender;
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
    public function definition(): array
    {
        //test data only to randomize
        $approximateAges = [
            'Puppy',
            'Young',
            'Adult',
            'Senior',
            '1 year',
            '2 years',
            '3 years',
            '4 years',
            '5 years',
            '6 months',
            '8 months',
            '1.5 years',
        ];
        $gender = fake()->randomElement(array_column(Gender::cases(), 'value'));
        $current_status = fake()->randomElement(array_column(AnimalStatus::cases(), 'value'));
        return [
            "name" => fake()->name($gender),
            "color" => fake()->colorName(),
            "age_approx" => fake()->randomElement($approximateAges),
            "gender" => $gender,
            "distinguishing_marks" => fake()->optional(0.7)->paragraph(1, true),
            "microchip_id" => fake()->unique()->randomNumber(15, true),
            "main_image_url" => fake()->imageUrl(640, 480, 'animals', true, 'pet'),
            "current_status" => $current_status,
        ];
    }
}
