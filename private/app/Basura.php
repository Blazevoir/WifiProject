<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basura extends Model
{
    // use SoftDeletes; //deleted at

    protected $table = 'basura';

    protected $hidden = ['created_at','updated_at'];

    protected $fillable = ["idpuntoacceso", "fecha", "hora", "mac"];
    
}
