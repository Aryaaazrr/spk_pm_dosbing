<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Schema::hasTable('angkatan') || !Schema::hasTable('alternatif')) {
            return;
        }

        $totalAlternatif = DB::table('alternatif')->count();
        if ($totalAlternatif == 0) {
            return;
        }

        $angkatans = DB::table('angkatan')->get();

        foreach ($angkatans as $angkatan) {
            $max = $angkatan->jumlah_mahasiswa / $totalAlternatif;

            DB::table('kuota')->insert([
                'id_angkatan' => $angkatan->id_angkatan,
                'max' => $max,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
