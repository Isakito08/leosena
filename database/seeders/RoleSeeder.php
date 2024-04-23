<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $rol1 = Role::create(['name' => 'ADMINISTRADOR']);
        $rol2 = Role::create(['name' => 'REGIONAL']);
        $rol3 = Role::create(['name' => 'CENTRO']);
        $rol4 = Role::create(['name' => 'EGRESADO']);

        $usuario = \App\Models\User::find(1);
        $usuario->assignRole($rol1);
        $usuario = \App\Models\User::find(2);
        $usuario->assignRole($rol2);
        $usuario = \App\Models\User::find(3);
        $usuario->assignRole($rol3);
        $usuario = \App\Models\User::find(4);
        $usuario->assignRole($rol4);
    }
}


