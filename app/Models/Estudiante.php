<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;


    protected $table = 'estudiantes';
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'numIdentidad',
        'carrera_id',

    ];

    public function carrera(){
        return $this->belongsTo(Carrera::class,'carrera_id');
    }
        
        
}
