<?php

use Illuminate\Database\Seeder;
use \App\Asignature;
use \App\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $hi = Asignature::where('name', 'Historia')->first();
       $le = Asignature::where('name', 'Lenguaje')->first();
       $fi = Asignature::where('name', 'Fisica')->first();
       $ma = Asignature::where('name', 'Matematicas')->first();
       $qu = Asignature::where('name', 'Quimica')->first();
       $bi = Asignature::where('name', 'Biología')->first();

       Profesor::create([
         'rut' => 16751256,
         'complete_name' => 'Claudio Esteban Rojas Rodriguez',
         'init_working' => '2010-05-20 00:00:00',
         'id_asignature' => $hi->id,
         'hour_value' => 6000,
       ]);
       Profesor::create([
         'rut' => 11635475,
         'complete_name' => 'Patricia Marcela Rodriguez Serrano',
         'init_working' => '2010-05-20 00:00:00',
         'id_asignature' => $le->id,
         'hour_value' => 6000,
       ]);
       Profesor::create([
         'rut' => 9442167,
         'complete_name' => 'Jorge Claudio Rojas Ulloa',
         'init_working' => '2010-05-20 00:00:00',
         'id_asignature' => $fi->id,
         'hour_value' => 9000,
       ]);
       Profesor::create([
         'rut' => 16030868,
         'complete_name' => 'Evelyn Macarena Hurtado Bravo',
         'init_working' => '2010-05-20 00:00:00',
         'id_asignature' => $ma->id,
         'hour_value' => 7000,
       ]);
       Profesor::create([
         'rut' => 16030867,
         'complete_name' => 'Felipe Andres Hurtado Bravo',
         'init_working' => '2010-05-20 00:00:00',
         'id_asignature' => $qu->id,
         'hour_value' => 8000,
       ]);
       Profesor::create([
         'rut' => 13452267,
         'complete_name' => 'Hector Alejandro Hurtado Bravo',
         'init_working' => '2010-05-20 00:00:00',
         'id_asignature' => $bi->id,
         'hour_value' => 6000,
       ]);
    }
}
