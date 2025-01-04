<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()
            ->count(10)
            ->sequence(function (Sequence $sequence) {
                $i = $sequence->index + 1;

                return [
                    'name' => "Mahasiswa {$i}",
                    'email' => "mahasiswa{$i}@gmail.com",
                ];
            })
            ->create();

        $users->each(function (User $user) {
            $user->assignRole(User::ROLE_MAHASISWA);
        });
    }
}