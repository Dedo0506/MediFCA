<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['nombre', 'tipo', 'presentacion', 'fecha', 'gramaje', 'fecha_caducidad', 'unidades'];

    public function tratamientos()
    {
        return $this->hasMany(Tratamiento::class);
    }
}

?>