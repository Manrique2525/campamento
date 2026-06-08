<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => 'Administrador',
            'guard_name' => 'web'
        ]);

        Role::firstOrCreate([
            'name' => 'Staff',
            'guard_name' => 'web'
        ]);

        Role::firstOrCreate([
            'name' => 'Consulta',
            'guard_name' => 'web'
        ]);
    }
}