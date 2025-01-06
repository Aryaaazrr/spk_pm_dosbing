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
                'kriteria_name' => 'Batas Jumlah Bimbingan',
                'tipe' => 'Secondary Factor',
                'keterangan' => 'Jumlah maksimal mahasiswa yang dapat dibimbing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K002',
                'id_aspek' => 1,
                'kriteria_name' => 'Rasio Bimbingan sedang berjalan',
                'tipe' => 'Core Factor',
                'keterangan' => 'Perbandingan jumlah mahasiswa yang sedang dibimbing dengan jumlah maksimal yang dapat dibimbing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K003',
                'id_aspek' => 2,
                'kriteria_name' => 'Keahlian Utama',
                'tipe' => 'Core Factor',
                'keterangan' => 'Kesesuaian antara topik skripsi dengan keahlian utama dosen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K004',
                'id_aspek' => 2,
                'kriteria_name' => 'Pengalaman Dalam Bidang',
                'tipe' => 'Secondary Factor',
                'keterangan' => 'Jumlah tahun pengalaman dosen dalam bidang yang relevan dengan topik skripsi mahasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K005',
                'id_aspek' => 3,
                'kriteria_name' => 'Proyek Penelitian',
                'tipe' => 'Core Factor',
                'keterangan' => 'Keterlibatan dalam proyek penelitian yang relevan dengan topik skripsi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_kriteria' => 'K006',
                'id_aspek' => 3,
                'kriteria_name' => 'Jumlah Publikasi Ilmiah',
                'tipe' => 'Secondary Factor',
                'keterangan' => 'Jumlah artikel yang dipublikasikan di jurnal nasional atau internasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}