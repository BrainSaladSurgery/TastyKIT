<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create([
            'name' => 'Admin'
        ]);

        $roleUser = Role::create([
            'name' => 'User'
        ]);

        //Acceso Admin
        Permission::create([
            'name' => 'users.index'
        ])->assignRole($roleAdmin);

        Permission::create([
            'name' => 'users.update'
        ])->assignRole($roleAdmin);

        Permission::create([
            'name' => 'users.show'
        ])->assignRole($roleAdmin);

        Permission::create([
            'name' => 'users.list'
        ])->assignRole($roleAdmin);


        Permission::create([
            'name' => 'users.delete'
        ])->assignRole($roleAdmin);


    }
}