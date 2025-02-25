<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alternatif>
 */
class AlternatifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' => $this->generateNIP(),
            'name' => $this->faker->name(),
        ];
    }

    private function generateNIP(): string
    {
        $tahun_lahir = $this->faker->numberBetween(1950, 2000);
        $bulan_lahir = str_pad($this->faker->numberBetween(1, 12), 2, '0', STR_PAD_LEFT);
        $tanggal_lahir = str_pad($this->faker->numberBetween(1, 28), 2, '0', STR_PAD_LEFT);

        $tahun_pns = $this->faker->numberBetween(1990, 2023);
        $bulan_pns = str_pad($this->faker->numberBetween(1, 12), 2, '0', STR_PAD_LEFT);

        $golongan = $this->faker->numberBetween(1, 4);
        $urutan = str_pad($this->faker->numberBetween(1, 999), 3, '0', STR_PAD_LEFT);

        return "{$tahun_lahir}{$bulan_lahir}{$tanggal_lahir} {$tahun_pns}{$bulan_pns} {$golongan} {$urutan}";
    }
}
