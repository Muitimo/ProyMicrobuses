<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
    protected $fillable = [ 'fecha', 'id_interno', 'id_chofer'];
}
