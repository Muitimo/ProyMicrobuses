<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $fillable = [ 'ci', 'nombre', 'sexo', 'fechaNacimiento', 'telefono', 'direccion', 'id_cargo'];
}
