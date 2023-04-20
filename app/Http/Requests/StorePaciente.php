<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaciente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //reglas de validacion de campos de formulario retornando al formulario nuevamente
            'nombre'=> 'required',
            'appaterno'=> 'required',
            'nocuenta'=> 'required|digits:9', //se pueden agregar mas reglas de validacion
            'carrera'=>'required|not_in:...',
            'semestre'=>'required|not_in:0',
            'grupo'=>'required|digits:4',

        ];
    }

    /*metodo para personalizar nombre de los atributos para las validaciones
    public function attributes()
    {
        return[
            'name'=>'nombre del curso'
        ];
    }

    //metodo para personalizar los mensajes de las validaciones 
    public function messages()
    {
    }*/
}
