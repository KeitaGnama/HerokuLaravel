<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('libro')->insert([
            'nombre' => 'Estrutura de datos',
            'autor' => 'Gnama keita',
        ]);

        DB::table('libro')->insert([
            'nombre' => 'Programacion Orientada a objectos',
            'autor' => 'Sory keita',
        ]);
    }
}
