<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class initial_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'manage system']);
        Permission::create(['name' => 'manage patients']);
        Permission::create(['name' => 'manage profile']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo('manage system');


        $role2 = Role::create(['name' => 'doctor']);
        $role2->givePermissionTo('manage patients');


        $role3 = Role::create(['name' => 'patient']);
        $role2->givePermissionTo('manage profile');

        // create demo users
        $user = Factory(App\User::class)->create([
            'name' => 'Admin User',
            'email' => 'admin@hms.com',
            'password' => Hash::make('123456789')
        ]);
        $user->assignRole($role1);

        $user = Factory(App\User::class)->create([
            'name' => 'Doctor',
            'email' => 'doctor@hms.com',
            'password' => Hash::make('123456789')
        ]);
        $user->assignRole($role2);

        $user = Factory(App\User::class)->create([
            'name' => 'Patient',
            'email' => 'patient@hms.com',
            'password' => Hash::make('123456789')
        ]);
        $user->assignRole($role3);
    }
}
