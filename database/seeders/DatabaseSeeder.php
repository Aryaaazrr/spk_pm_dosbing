<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\User\AdminSeeder;
use Database\Seeders\User\MahasiswaSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        RoleAndPermissionSeeder::class,
        AdminSeeder::class,
        MahasiswaSeeder::class,
        SettingSeeder::class,
    ]);
    }
}