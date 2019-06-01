<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choferes extends Model
{
    protected $fillable = [ 'fechaInicio', 'fechaFin', 'id_chofer', 'id_interno'];
}
