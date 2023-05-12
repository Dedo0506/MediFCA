@extends('layouts.plantilla')

@section('title', 'Registrar')

@section('content')

    <div>
        <nav>
            @include('layouts.partials.headerPaciente')
        </nav>
    </div>
    <h1>Antecedentes</h1>
    <form action="{{route('antecedentes.store')}}" method="POST">

        @csrf
        <!--crea y lleva un registro de los token generados que solo pueden ser accesados a la ruta del form-->  
        <h2>Antecendetes patologicos</h2>  
        <label>
            Aplica: 
            <br>
            <select name="antP_aplica">
                <option value=""{{old('antP_aplica')== '' ? 'selected' : ''}}>...</option>
                <option value="S"{{old('antP_aplica')== 'S' ? 'selected' : ''}}>Si</option>
                <option value="N"{{old('antP_aplica')== 'N' ? 'selected' : ''}}>No</option>
            </select>
        </label>
        @error('antP_aplica')
            <small>*{{$message}}</small>
            <br><br>
        @enderror
        <label>
            Descripcion: 
            <br>
            <textarea type="text" name="antP_descripcion" rows="5">{{old('antP_aplica' == 'N' ? 'readonly' : '' )}}</textarea>
            <br>
        </label>
        @error('antP_descripcion')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <h2>Antecendetes Familiares</h2>  
        <label>
            Enfermedad
            <select name="enfermedad">
                <option value="" {{old('enfermedad')== 'ninguna' ? 'selected' : ''}}>...</option>
                <option value="Diabetes" {{old('enfermedad')== 'diabetes' ? 'selected' : ''}}>diabetes</option>
            </select>
        </label>
        @error('aplica')
            <small>*{{$message}}</small>
            <br><br>
        @enderror
        <label>
            Descripcion: 
            <br>
            <textarea type="text" name="descripcion" rows="5">{{old('descripcion')}}</textarea>
            <br>
        </label>
        @error('descripcion')
            <small>*{{$message}}</small>
            <br><br>
        @enderror
        <br>
        
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

