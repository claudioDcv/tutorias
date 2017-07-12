<?php

use Illuminate\Database\Seeder;
use \App\InfoAlumno;
use \App\User;

class InfoAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumno1 = User::where('email', 'john@github.com')->first();
        InfoAlumno::create([
          'rut' => 17852509, //3
          'complete_name' => 'Gonzalo Hernan Solis Sepulveda',
          'birth_date' => '1991-10-23 00:00:00',
          'address' => 'El Ebano #0877, Puente Alto',
          'phones' => '+56944674728 - +56954900747',
          'user_id' => $alumno1->id,
        ]);
    }
}
