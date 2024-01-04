<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ficha';
    protected $fillable = [

        'id_ficha',
        'nombre_programa',
        'fecha_in',
        'fecha_fin',
        'total_activos',
        'total_inscritos'
    ];

    public function instructor(){

        return $this->belongsToMany('App\Models\Instructor');
       
    }
}
