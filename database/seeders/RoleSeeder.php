<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{

    public function run()
    {
        Role::create([
            'designac' => 'Estudante',
        ]);

        Role::create([
            'designac' => 'Docente',
        ]);

        Role::create([
            'designac' => 'Orientador',
        ]);

        Role::create([
            'designac' => 'Administrador',
        ]);
    }
}
