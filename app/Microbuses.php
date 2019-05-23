<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microbuses extends Model
{
     protected $fillable = [ 'interno', 'placa', 'marca', 'modelo', 'nropasajeros', 'id_propietario'];
}
