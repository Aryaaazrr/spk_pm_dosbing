<?php

namespace Database\Seeders;

use App\Models\ProfileMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternatifData = [
            1 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 16],
                ['id_kriteria' => 5, 'id_subkriteria' => 23],
                ['id_kriteria' => 6, 'id_subkriteria' => 29],
            ],
            2 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 16],
                ['id_kriteria' => 5, 'id_subkriteria' => 22],
                ['id_kriteria' => 6, 'id_subkriteria' => 26],
            ],
            3 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 23],
                ['id_kriteria' => 6, 'id_subkriteria' => 26],
            ],
            4 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 24],
                ['id_kriteria' => 6, 'id_subkriteria' => 32],
            ],
            5 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            6 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            7 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            8 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            9 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            10 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            11 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            12 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            13 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            14 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            15 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            16 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            17 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
            18 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 17],
                ['id_kriteria' => 5, 'id_subkriteria' => 20],
                ['id_kriteria' => 6, 'id_subkriteria' => 26],
            ],
            19 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 20],
                ['id_kriteria' => 5, 'id_subkriteria' => 21],
                ['id_kriteria' => 6, 'id_subkriteria' => 31],
            ],
            20 => [
                ['id_kriteria' => 1, 'id_subkriteria' => 10],
                ['id_kriteria' => 2, 'id_subkriteria' => 11],
                ['id_kriteria' => 3, 'id_subkriteria' => 13],
                ['id_kriteria' => 4, 'id_subkriteria' => 20],
                ['id_kriteria' => 5, 'id_subkriteria' => 22],
                ['id_kriteria' => 6, 'id_subkriteria' => 33],
            ],
        ];

        foreach ($alternatifData as $alternatifId => $kriteria) {
            foreach ($kriteria as $kriteria) {
                ProfileMethod::create([
                    'id_alternatif' => $alternatifId,
                    'id_kriteria' => $kriteria['id_kriteria'],
                    'id_subkriteria' => $kriteria['id_subkriteria']
                ]);
            }
        }
    }
}