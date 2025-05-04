<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
/*
$roleadmin = Role::create(['name' => 'admin']);

$rolefisio = Role::create(['name' => 'fisio']);
$rolepatient = Role::create(['name' => 'patient']);
$permissionedit = Permission::create(['name' => 'edit']);
$permissionview = Permission::create(['name' => 'view']);
$permissiondelete = Permission::create(['name' => 'delete']);

$roleadmin->syncPermissions(['edit', 'delete','view']);
$rolefisio->givePermissionTo($permissionedit, $permissionview);
$permissionview->assignRole($rolepatient);*/

        $user=User::factory()->create([
            'name' => 'example',
            'email' => 'example@text.com',

        ]);
        $user->givePermissionTo('edit', 'delete');
    }

}
