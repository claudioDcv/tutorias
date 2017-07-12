<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoAlumno extends Model
{
    protected $table = 'info_alumno';

    public function users()
    {
      return $this->hasOne('App\User', 'bla');
    }
}
