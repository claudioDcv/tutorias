<?php

use Illuminate\Database\Seeder;
use \App\Tutoria;
use \App\Status;
use \App\Profesor;
use \App\User;

class TutoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $confirmada = Status::where('name', 'confirmada')->first();
        $profesor = Profesor::where('rut', 16751256)->first();
        $alumno = User::with('infoAlumno')->where('email', 'g.solis.s18@hotmail.com')->first();

        Tutoria::create([
          'make' => '2017-07-05 18:00:00',
          'status_id' => $confirmada->id,
          'profesor_id' => $profesor->id,
          'alumno_id' => $alumno->id,
        ]);
    }
}
