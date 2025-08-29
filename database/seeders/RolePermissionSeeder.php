<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'applicant']);

        // Permissions
        Permission::create(['name' => 'tasks.create']);
        Permission::create(['name' => 'tasks.view']);
        Permission::create(['name' => 'tasks.view.own']);
        Permission::create(['name' => 'tasks.edit']);
        Permission::create(['name' => 'tasks.edit.own']);
        Permission::create(['name' => 'tasks.delete']);
        Permission::create(['name' => 'tasks.delete.own']);

        #assign permission to roles
        $admin = Role::findByName('admin');
        $admin->givePermissionTo(Permission::all());

        $editor = Role::findByName('editor');
        $editor->givePermissionTo(['tasks.edit']);

        $applicant = Role::findByName('applicant');
        $applicant->givePermissionTo(['tasks.view.own','tasks.edit.own','tasks.delete.own']);

        //  Assign role to user
        $user = User::find(1);
        $user->assignRole('editor');


    }
}
