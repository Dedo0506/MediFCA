<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [
        'paciente_id',
        'fecha_hora',
        'motivo',
        'exploracion_fisica',
        'diagnostico',
        'ambulancia',
    ];
    use HasFactory;

    public function paciente()
    {
    return $this->belongsTo(Paciente::class, 'paciente_id', 'id');
    }
}

