<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignature extends Model
{
    protected $table = 'asignature';

    protected $fillable = [
        'name', 'id',
    ];
}
