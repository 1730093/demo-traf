<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        DB::table('generos')->insert([
            'genero' => 'Masculino',
        ]);

        DB::table('generos')->insert([
            'genero' => 'Femenino',
        ]);
        DB::table('roles')->insert([
            'rol' => 'administrador',
        ]);
        DB::table('roles')->insert([
            'rol' => 'empleado',
        ]);


        DB::table('users')->insert([
            'name' => 'jorge',
            'apellido_pat' => 'meza',
            'apellido_mat' => 'meza',
            'fecha_nac' => '29/04/1999',
            'email' => 'j000rge52@gmail.com',
            'password' => Hash::make('123456789'),
            'id_genero' => '1',
            'id_rol' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Juan',
            'apellido_pat' => 'meza',
            'apellido_mat' => 'meza',
            'fecha_nac' => '29/04/1999',
            'email' => 'usuario@gmail.com',
            'password' => Hash::make('123456789'),
            'id_genero' => '1',
            'id_rol' => '2',
        ]);
    }
}
