<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RBACSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        $permissions = [
            'manage-users',
            'manage-roles',
            'manage-permissions',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'description' => "Can $permission"]);
        }

        // Create admin role
        $adminRole = Role::create([
            'name' => 'admin',
            'description' => 'Administrator with all permissions'
        ]);

        $adminRole->permissions()->sync(Permission::pluck('id'));

        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
        ]);
    }
}
