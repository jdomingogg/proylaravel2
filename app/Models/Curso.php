<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = [
        'id',
        'Clave_Curso',
        'Nombre_Curso',
        'DNI_Tutor',
    ];

    public function alumnos(){
        return $this->hasMany(Alumno::class,'Nombre_Curso','Clave_Curso');
    }

    public function tutor(){
        return $this->belongsTo(Tutor::class,'DNI','DNI_Tutor');
    }

   

}
