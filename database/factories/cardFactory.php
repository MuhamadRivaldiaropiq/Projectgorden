<?php

namespace Database\Factories;

use App\Models\gorden;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\card>
 */
class cardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datagorden_id' => gorden::factory(), 
            'judul_card' => fake()->sentence(), 
            'isi_card' => fake()->sentence() 
        ];
    }
}
