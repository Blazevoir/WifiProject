<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Puntoacceso extends Model
{
    // use SoftDeletes; //deleted at

    protected $table = 'puntoacceso';

    protected $hidden = ['created_at','updated_at'];

    protected $fillable = [ "iduser", "modelo", "ubicacion", "latitud", "longitud", "fechaalta"];
    
    public function user(){
        return $this->belongsTo('App\User','iduser');
    }
    
    public function conexion(){
        return $this->hasMany('App\Conexion');
    }

}
