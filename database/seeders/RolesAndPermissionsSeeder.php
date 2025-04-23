<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $createPostPermission = Permission::create(['name' => 'create_post']);
        $editPostPermission = Permission::create(['name' => 'edit_post']);
        $deletePostPermission = Permission::create(['name' => 'delete_post']);

        $adminRole->permissions()->attach([$createPostPermission->id, $editPostPermission->id, $deletePostPermission->id]);
        $userRole->permissions()->attach([$createPostPermission->id]);
    }
}
