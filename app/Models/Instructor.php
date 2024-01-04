<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_instructor';
    protected $fillable = [
        'id_instructor',
        'nombres',
        'apellidos',
        'ficha',
        'coordinacion'
    ];

    public function ficha(){
        
        return $this->belongsToMany('App\Models\Ficha');
    }

    
}
