<?php

namespace Database\Seeders;

use App\Models\Subkriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubkriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriteriaData = [
            1 => [
                ['subkriteria' => '1 - 3 Mahasiswa', 'id_nilai' => 1],
                ['subkriteria' => '4 - 6 Mahasiswa', 'id_nilai' => 2],
                ['subkriteria' => '6 - 8 Mahasiswa', 'id_nilai' => 3],
                ['subkriteria' => '9 - 11 Mahasiswa', 'id_nilai' => 4],
                ['subkriteria' => '12 - 15 Mahasiswa', 'id_nilai' => 5],
            ],
            2 => [
                ['subkriteria' => 'Tersisa 20%', 'id_nilai' => 1],
                ['subkriteria' => 'Tersisa 40%', 'id_nilai' => 2],
                ['subkriteria' => 'Tersisa 60%', 'id_nilai' => 3],
                ['subkriteria' => 'Tersisa 80%', 'id_nilai' => 4],
                ['subkriteria' => 'Tersisa 100%', 'id_nilai' => 5],
                // ['subkriteria' => 'Terpenuhi'],
                // ['subkriteria' => 'Belum Terpenuhi'],
            ],
            3 => [
                ['subkriteria' => 'Software Engineer', 'id_nilai' => 3],
                ['subkriteria' => 'Software Quality Assurance Analyst', 'id_nilai' => 2],
                ['subkriteria' => 'Information Technology Entrepreneur', 'id_nilai' => 1],
            ],
            4 => [
                ['subkriteria' => '2022 - 2027', 'id_nilai' => 1],
                ['subkriteria' => '2016 - 2021', 'id_nilai' => 2],
                ['subkriteria' => '2010 - 2015', 'id_nilai' => 3],
                ['subkriteria' => '2004 - 2009', 'id_nilai' => 4],
                ['subkriteria' => '1998 - 2003', 'id_nilai' => 5],
            ],
            5 => [
                ['subkriteria' => '1 - 6 Tahun', 'id_nilai' => 1],
                ['subkriteria' => '7 - 13 Tahun', 'id_nilai' => 2],
                ['subkriteria' => '14 - 20 Tahun', 'id_nilai' => 3],
                ['subkriteria' => '21 - 27 Tahun', 'id_nilai' => 4],
                ['subkriteria' => 'Lebih dari 27 Tahun', 'id_nilai' => 5],
                // ['subkriteria' => '4 Tahun'],
                // ['subkriteria' => '5 Tahun'],
                // ['subkriteria' => '8 Tahun'],
                // ['subkriteria' => '10 Tahun'],
                // ['subkriteria' => '11 Tahun'],
                // ['subkriteria' => '12 Tahun'],
                // ['subkriteria' => '15 Tahun'],
                // ['subkriteria' => '18 Tahun'],
                // ['subkriteria' => '27 Tahun'],
            ],
            6 => [
                ['subkriteria' => '0 - 20 Jurnal', 'id_nilai' => 1],
                ['subkriteria' => '21 - 41 Jurnal', 'id_nilai' => 2],
                ['subkriteria' => '42 - 62 Jurnal', 'id_nilai' => 3],
                ['subkriteria' => '63 - 85 Jurnal', 'id_nilai' => 4],
                ['subkriteria' => 'Lebih dari 85 Jurnal', 'id_nilai' => 5],
            ]
        ];

        foreach ($kriteriaData as $kriteriaId => $subkriterias) {
            foreach ($subkriterias as $value) {
                Subkriteria::create([
                    'id_kriteria' => $kriteriaId,
                    'subkriteria_name' => $value['subkriteria'],
                    'id_nilai' => $value['id_nilai']
                ]);
            }
        }
    }
}