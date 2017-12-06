<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //accede a la tabla mensajes de la bd
    protected $table = 'mensajes';
    //valida la asignación masiva de datos
    protected $fillable = ['email','asunto','mensaje'];
}
