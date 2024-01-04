<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_aprendiz';
    protected $fillable = [
        'id_aprendiz',
        'nombres',
        'apellidos',
        'email',
        'celular_1',
        'celular_2',
        'ficha_id', 
        'foto',
        'observacion',
        'calificaciones',
    ];

    public function ficha(){

        return $this->belongsTo(Ficha::class, 'ficha_id', 'id_ficha');
    }
}
