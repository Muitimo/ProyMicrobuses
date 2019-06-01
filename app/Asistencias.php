<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencias extends Model
{
    protected $fillable = [ 'fecha','horaIngreso', 'horaSalida', 'id_persona'];
}
