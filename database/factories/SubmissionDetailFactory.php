<?php

namespace Database\Factories;

use App\Models\Alternatif;
use App\Models\Submissions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubmissionDetail>
 */
class SubmissionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_submission' => Submissions::factory(),
            'id_alternatif' => Alternatif::factory(),
        ];
    }
}
