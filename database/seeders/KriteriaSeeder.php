<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria')->insert([
            [
                'kode_kriteria' => 'K001',
                'id_aspek' => 1,
                'kriteria_name' => 'Jumlah Kuota Bimbingan',
                'tipe' => 'Core Factor',
                'keterangan' => 'Jumlah maksimal kuota mahasiswa yang dapat dibimbing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K002',
                'id_aspek' => 1,
                'kriteria_name' => 'Pemenuhan kuota bimbingan',
                'tipe' => 'Secondary Factor',
                'keterangan' => 'Pemenuhan jumlah maksimal kuota mahasiswa yang dapat dibimbing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K003',
                'id_aspek' => 2,
                'kriteria_name' => 'Keahlian Utama',
                'tipe' => 'Core Factor',
                'keterangan' => 'keahlian utama dosen yang dimiliki dosen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K004',
                'id_aspek' => 2,
                'kriteria_name' => 'Pengalaman Dalam Bidang',
                'tipe' => 'Secondary Factor',
                'keterangan' => 'Jumlah tahun pengalaman dalam keahlian utama yang dimiliki dosen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K005',
                'id_aspek' => 3,
                'kriteria_name' => 'Proyek Penelitian',
                'tipe' => 'Core Factor',
                'keterangan' => 'Jumlah tahun keterlibatan dalam proyek penelitian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K006',
                'id_aspek' => 3,
                'kriteria_name' => 'Jumlah Publikasi Ilmiah',
                'tipe' => 'Secondary Factor',
                'keterangan' => 'Jumlah artikel yang dipublikasikan di Google Scholar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}