<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    //accede a la tabla mensajes de la bd
    protected $table = 'voluntarios';
    //valida la asignación masiva de datos
    protected $fillable = ['email','ayuda'];
}
