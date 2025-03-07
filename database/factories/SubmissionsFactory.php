<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submissions>
 */
class SubmissionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => User::factory(),
            'judul' => $this->faker->sentence(),
            'deskripsi' => $this->faker->text(),
            'prodi' => 'Teknik Informatika',
        ];
    }
}