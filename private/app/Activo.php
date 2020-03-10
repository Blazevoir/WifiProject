<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activo extends Model
{
    //  use SoftDeletes; //deleted at

    protected $table = 'activo';

    protected $hidden = ['created_at','updated_at'];

    protected $fillable = ["fechainicial", "fechafinal", "horainicial", "horafinal", "periodominimo"];
    
}
