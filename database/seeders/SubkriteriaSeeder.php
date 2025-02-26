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
                ['subkriteria' => '7 - 9 Mahasiswa', 'id_nilai' => 3],
                ['subkriteria' => '10 - 12 Mahasiswa', 'id_nilai' => 4],
                ['subkriteria' => '13 - 15 Mahasiswa', 'id_nilai' => 5],
            ],
            2 => [
                // ['subkriteria' => 'Tersisa 20%', 'id_nilai' => 1],
                // ['subkriteria' => 'Tersisa 40%', 'id_nilai' => 2],
                // ['subkriteria' => 'Tersisa 60%', 'id_nilai' => 3],
                // ['subkriteria' => 'Tersisa 80%', 'id_nilai' => 4],
                // ['subkriteria' => 'Tersisa 100%', 'id_nilai' => 5],
                ['subkriteria' => 'Terpenuhi', 'id_nilai' => '1'],
                ['subkriteria' => 'Belum Terpenuhi', 'id_nilai' => '2'],
            ],
            3 => [
                ['subkriteria' => 'Information Technology Entrepreneur', 'id_nilai' => 1],
                ['subkriteria' => 'Software Quality Assurance Analyst', 'id_nilai' => 2],
                ['subkriteria' => 'Software Engineer', 'id_nilai' => 3],
            ],
            4 => [
                ['subkriteria' => '2022 - 2027', 'id_nilai' => 1],
                ['subkriteria' => '2016 - 2021', 'id_nilai' => 2],
                ['subkriteria' => '2010 - 2015', 'id_nilai' => 3],
                ['subkriteria' => '2004 - 2009', 'id_nilai' => 4],
                ['subkriteria' => '1998 - 2003', 'id_nilai' => 5],
            ],
            5 => [
                ['subkriteria' => '1 - 3 Tahun', 'id_nilai' => 1],
                ['subkriteria' => '4 - 7 Tahun', 'id_nilai' => 2],
                ['subkriteria' => '8 - 11 Tahun', 'id_nilai' => 3],
                ['subkriteria' => '12 - 15 Tahun', 'id_nilai' => 4],
                ['subkriteria' => 'Lebih dari 15 Tahun', 'id_nilai' => 5],
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
                ['subkriteria' => '0 - 50 Jurnal', 'id_nilai' => 1],
                ['subkriteria' => '51 - 101 Jurnal', 'id_nilai' => 2],
                ['subkriteria' => '102 - 152 Jurnal', 'id_nilai' => 3],
                ['subkriteria' => '153 - 203 Jurnal', 'id_nilai' => 4],
                ['subkriteria' => 'Lebih dari 203 Jurnal', 'id_nilai' => 5],
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