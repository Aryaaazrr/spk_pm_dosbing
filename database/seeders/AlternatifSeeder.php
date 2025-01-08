<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alternatif')->insert([
            [
                'nip' => '19711009 200312 1 001',
                'name' => 'Dr. Denny Trias Utomo, S.Si, M.T',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19740519 200312 1 002',
                'name' => 'Nugroho Setyo Wibowo, ST. MT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19801212 200501 1 001',
                'name' => 'Prawidya Destarianto, S.Kom, M.T',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19810615 200604 1 002',
                'name' => 'Syamsul Arifin, S.Kom, M.Cs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19700831 199803 1 001',
                'name' => 'Moh. Munih Dian Widianta, S.Kom, M.T',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19770929 200501 1 003',
                'name' => 'Didit Rahmat Hartadi, S.Kom, MT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19781011 200501 2 002',
                'name' => 'Elly Antika, ST, M.Kom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19830109 201803 1 001',
                'name' => 'Hermawan Arief Putranto, ST, MT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19851128 200812 1 002',
                'name' => 'Aji Seto Arifianto, S.ST., M.T.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19860802 201504 2 002',
                'name' => 'Ratih Ayuninghemi, S.ST, M.Kom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19920528 201803 2 001',
                'name' => 'Bety Etikasari, S.Pd, M.Pd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19900227 201803 2 001',
                'name' => 'Trismayanti Dwi P, S.Kom, M.Cs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19920302 201803 2 001',
                'name' => 'Zilvanhisna Emka Fitri, ST. MT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19890710 201903 1 010',
                'name' => 'Ery Setiyawan Jullev Atmadji, S.Kom, M.Cs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19940812 201903 1 013',
                'name' => 'Mukhamad Angga Gumilang, S. Pd., M. Eng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19930508 202203 2 013',
                'name' => 'Dia Bitari Mei Yuana, S.ST., M.Tr.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19921227 202203 1 007',
                'name' => 'Choirul Huda, S.Kom., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19930831 202406 2 001',
                'name' => 'Arvita Agus Kurniasari, S.ST.,M.Tr.Kom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19900702 202406 1 002',
                'name' => 'David Juli Ariyadi, S.Kom., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19950602 202406 2 005',
                'name' => 'Fatimatuzzahra, S.Kom., M.Kom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}