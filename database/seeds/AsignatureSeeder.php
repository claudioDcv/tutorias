<?php

use Illuminate\Database\Seeder;
use \App\Asignature;

class AsignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asignature::create([
          'name' => 'Matematicas',
          'description' => 'matematicas',
        ]);
        Asignature::create([
          'name' => 'Lenguaje',
          'description' => 'lenguaje',
        ]);
        Asignature::create([
          'name' => 'Historia',
          'description' => 'historia',
        ]);
        Asignature::create([
          'name' => 'Biología',
          'description' => 'biología',
        ]);
        Asignature::create([
          'name' => 'Fisica',
          'description' => 'fisica',
        ]);
        Asignature::create([
          'name' => 'Quimica',
          'description' => 'quimica',
        ]);
    }
}
