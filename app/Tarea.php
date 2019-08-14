<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['nombre'];

    public function empleados(){
        return $this->belongsToMany('App\Empleado');
    }
}
