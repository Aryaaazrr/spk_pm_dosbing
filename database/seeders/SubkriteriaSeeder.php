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
                ['subkriteria' => '1 Mahasiswa', 'nilai' => 1],
                ['subkriteria' => '2 Mahasiswa', 'nilai' => 2],
                ['subkriteria' => '3 Mahasiswa', 'nilai' => 3],
                ['subkriteria' => '4 Mahasiswa', 'nilai' => 4],
                ['subkriteria' => '5 Mahasiswa', 'nilai' => 5],
                ['subkriteria' => '6 Mahasiswa', 'nilai' => 6],
                ['subkriteria' => '7 Mahasiswa', 'nilai' => 7],
                ['subkriteria' => '8 Mahasiswa', 'nilai' => 8],
                ['subkriteria' => '9 Mahasiswa', 'nilai' => 9],
                ['subkriteria' => '10 Mahasiswa', 'nilai' => 10],
            ],
            2 => [
                ['subkriteria' => 'Belum Terpenuhi', 'nilai' => 1],
                ['subkriteria' => 'Terpenuhi', 'nilai' => 2],
            ],
            3 => [
                ['subkriteria' => 'Software Engineer', 'nilai' => 1],
                ['subkriteria' => 'Software Quality Assurance Analyst', 'nilai' => 2],
                ['subkriteria' => 'Information Technology Entrepreneur', 'nilai' => 3],
            ],
            4 => [
                ['subkriteria' => '1998 - 2003', 'nilai' => 1],
                ['subkriteria' => '2004 - 2009', 'nilai' => 2],
                ['subkriteria' => '2010 - 2015', 'nilai' => 3],
                ['subkriteria' => '2016 - 2021', 'nilai' => 4],
                ['subkriteria' => '2022 - 2027', 'nilai' => 5],
            ],
            5 => [
                ['subkriteria' => '1998 - 2003', 'nilai' => 1],
                ['subkriteria' => '2004 - 2009', 'nilai' => 2],
                ['subkriteria' => '2010 - 2015', 'nilai' => 3],
                ['subkriteria' => '2016 - 2021', 'nilai' => 4],
                ['subkriteria' => '2022 - 2027', 'nilai' => 5],
            ],
            6 => [
                ['subkriteria' => 'Lebih dari 100 Publikasi Jurnal', 'nilai' => 1],
                ['subkriteria' => '99 - 89 Publikasi Jurnal', 'nilai' => 2],
                ['subkriteria' => '88 - 78 Publikasi Jurnal', 'nilai' => 3],
                ['subkriteria' => '77 - 67 Publikasi Jurnal', 'nilai' => 4],
                ['subkriteria' => '66 - 56 Publikasi Jurnal', 'nilai' => 5],
                ['subkriteria' => '55 - 45 Publikasi Jurnal', 'nilai' => 6],
                ['subkriteria' => '44 - 34 Publikasi Jurnal', 'nilai' => 7],
                ['subkriteria' => '33 - 23 Publikasi Jurnal', 'nilai' => 8],
                ['subkriteria' => '22 - 12 Publikasi Jurnal', 'nilai' => 9],
                ['subkriteria' => '11 - 01 Publikasi Jurnal', 'nilai' => 10],
            ]
        ];

        foreach ($kriteriaData as $kriteriaId => $subkriterias) {
            foreach ($subkriterias as $subkriteria) {
                Subkriteria::create([
                    'id_kriteria' => $kriteriaId,
                    'subkriteria_name' => $subkriteria['subkriteria'],
                    'nilai' => $subkriteria['nilai']
                ]);
            }
        }
    }
}
