<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesor';

    public function asignature(){
      return $this->belongsTo('App\Asignature', 'id_asignature');
    }
}
