<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{

    protected $fillable = [
      'codigo',
      'nombre',
      'apellido_paterno',
      'apellido_materno',
      'correo',
      'fk_id_tipo_contrado',
      'estado'
    ];
}
