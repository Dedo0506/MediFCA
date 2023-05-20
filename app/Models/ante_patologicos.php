<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ante_patologicos extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'paciente_id'
    ];

    public function paciente()
    {
    return $this->belongsTo(Paciente::class, 'paciente_id', 'id');
    }
}
