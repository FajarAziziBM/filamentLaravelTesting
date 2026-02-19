<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);

        // Permissions (bisa auto generate Shield)
        $permissions = Permission::all();

        $superAdmin->givePermissionTo($permissions);
        $admin->givePermissionTo($permissions); // Atur sesuai kebutuhan
        $user->givePermissionTo($permissions->whereIn('name', ['view dashboard']));
    }
}
