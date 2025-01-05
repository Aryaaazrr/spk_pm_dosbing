<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aspek')->insert([
            [
                'kode_aspek' => 'A001',
                'aspek_name' => 'Kuota Bimbingan',
                'persentase' => 35,
                'keterangan' => 'Aspek ini mengukur jumlah maksimum bimbingan  oleh seorang dosen pada satu periode tertentu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_aspek' => 'A002',
                'aspek_name' => 'Bidang Keahlian',
                'persentase' => 35,
                'keterangan' => 'Aspek ini mengukur kesesuaian antara topik skripsi mahasiswa dengan bidang keahlian dosen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_aspek' => 'A003',
                'aspek_name' => 'Riset Penelitian',
                'persentase' => 30,
                'keterangan' => 'Aspek ini mengukur pengalaman dosen dalam kegiatan riset dan penelitian yang relevan dengan topik skripsi mahasiswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}