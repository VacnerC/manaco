<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //Insertar registros a la tabla

        DB::table('categories')->insert([
            [
                'nombre'=>'calzados de varon',
                'descripcion'=>'calzados de varon',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre'=>'calzados de dama',
                'descripcion'=>'calzados de dama',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]

            ]);
    }
}
