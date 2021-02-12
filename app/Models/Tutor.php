<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = 'tutores';
    protected $fillable = [
        'Nombre',
        'Apellidos',
        'DNI',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'DNI', 'DNI_Tutor');
    }
}
