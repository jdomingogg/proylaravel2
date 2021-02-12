<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    protected $fillable = [
        'Nombre',
        'Apellidos',
        'DNI',
        'Nombre_Curso'
    ];

    public  function curso(){
        return $this->belongsTo(Curso::class,'Nombre_Curso','Clave_Curso');
    }

    public function cursos(){
        return 'holacaracola';
    }
}
