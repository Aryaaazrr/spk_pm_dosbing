<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Role::truncate();
        Permission::truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('role_has_permissions')->truncate();

        $roles = ['admin', 'mahasiswa'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $customerRole = Role::where(['name' => 'mahasiswa'])->first();
        $customerPermissions = [
            'pengajuan-create',
            'pengajuan-read',
            'pengajuan-update',
            'pengajuan-delete',
            'pemilihan-dosen-create',
            'pemilihan-dosen-read',
            'pemilihan-dosen-update',
            'pemilihan-dosen-delete',
        ];

        foreach ($customerPermissions as $permissionName) {
            $permission = Permission::create(['name' => $permissionName]);
            $customerRole->givePermissionTo($permission);
        }

        $adminPermissions = [
            'aspek-create',
            'aspek-read',
            'aspek-update',
            'aspek-delete',
            'kriteria-create',
            'kriteria-read',
            'kriteria-update',
            'kriteria-delete',
            'alternatif-create',
            'alternatif-read',
            'alternatif-update',
            'alternatif-delete',
            'profile-create',
            'profile-read',
            'profile-update',
            'profile-delete',
            'mahasiswa-create',
            'mahasiswa-read',
            'mahasiswa-update',
            'mahasiswa-delete',
            'setting-update',
            'website-update',
        ];

        $adminRole = Role::where(['name' => 'admin'])->first();
        foreach ($adminPermissions as $permissionName) {
            $permission = Permission::create(['name' => $permissionName]);
            $adminRole->givePermissionTo($permission);
        }

        Schema::enableForeignKeyConstraints();
    }
}