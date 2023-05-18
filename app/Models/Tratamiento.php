<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['medicamento_id', 'cantidad_suministrada'];

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}
