<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conexion extends Model
{
    // use SoftDeletes; //deleted at

    protected $table = 'conexion';

    protected $hidden = ['created_at','updated_at'];

    protected $fillable = ["idpuntoacceso", "fecha", "hora", "mac"];
    
    public function puntoacceso(){
        return $this->belongsTo('App\Puntoacceso','idpuntoacceso');
    }
}
