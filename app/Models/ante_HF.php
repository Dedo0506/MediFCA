<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ante_HF extends Model
{
    use HasFactory;
    
    public function paciente(){
        return $this->belongsTo('App\Models\Paciente');
    }
}
