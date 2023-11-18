<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'nombre',
        'apellido',
        'email',
        'telefono',
        'carrera'

    ];

    public function carreras(){
        return $this->belongsToMany(Carrera::class);
    }
        
        
}
