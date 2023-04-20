<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
class Paciente extends Model
{
    use HasFactory;
    //propiedades del objeto que el usuario solo tiene acceso a modificar o guardar en la base
    protected $fillable = [];

    /*
    Propiedad que permite proteger el acceso a ciertos campos, es decir 
    ignora la informacion que se quiera agregar a ese campo si el usuario no tiene privilegios*/

    protected $guarded = [];


    protected function nombre(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value),
        );
    }

    protected function appaterno(): Attribute
    {
        return new Attribute(
            get: fn($value) => strtolower($value),
            set: fn($value) => strtolower($value),
        );
    }

    protected function apmaterno(): Attribute
    {
        return new Attribute(
            get: fn($value) => strtolower($value),
            set: fn($value) => strtolower($value),
        );
    }

    /*este bloque de codigo lo habilitaremos despues de crear datos fake 
    public function setFechaNacimientoAttribute($value)
    {
        $this->attributes['fecha_nacimiento'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }*/
}
