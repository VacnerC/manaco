<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a la tabla

        DB::table('clientes')->insert([
            [
                'nombres'=>'Juan',
                'apellidos'=>'Perez',
                'direccion'=>'Av. Arce',
                'celular'=>'66667777',
                'nit'=>'12345678'
            ],
            [
                'nombres'=>'Pedro',
                'apellidos'=>'Lopez',
                'direccion'=>'Av. Sucre',
                'celular'=>'77778888',
                'nit'=>'1255855'
            ]

            ]);
    }
}
