<?php

namespace Database\Seeders;

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
        SettingSeeder::class,
        AdminSeeder::class,
        MahasiswaSeeder::class,
        AspekSeeder::class,
        KriteriaSeeder::class,
        SubkriteriaSeeder::class,
        AlternatifSeeder::class,
        ProfileMethodSeeder::class,
        // KuotaSeeder::class,
    ]);
    }
}