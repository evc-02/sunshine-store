<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre'=> 'Pijama',
                'precio'=> '95,5',
                'created_at'=> now(),
                'updated_at'=> now(),
            ], 
            [
                'nombre'=> 'Sandalia',
                'precio'=> '135',
                'created_at'=> now(),
                'updated_at'=> now(),
            ], 
        ]);
    }
}
