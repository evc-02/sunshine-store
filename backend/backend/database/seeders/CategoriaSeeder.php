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
        //Insertar Registros a la tabla

        DB::table('categorias')->insert([
            [
                'nombre'=> 'Ropa',
                'descripcion'=> 'Ropa Infantil',
                'created_at'=> now(),
                'updated_at'=> now(),
            ], 
            [
                'nombre'=> 'Accesorios',
                'descripcion'=> 'Accesorios Infantiles',
                'created_at'=> now(),
                'updated_at'=> now(),
            ], 
        ]);
    }
}
