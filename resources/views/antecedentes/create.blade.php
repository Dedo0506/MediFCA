@extends('layouts.plantilla')

@section('title', 'Registrar')

@section('content')
    <div>
        <nav>
            @include('layouts.partials.headerPaciente')
        </nav>
    </div>
    <h1>Antecedentes</h1>
    <a href="{{route('pacientes.edit')}}">Antecedentes</a>
    <form action="{{route('pacientes.update')}}" method="POST">

        @csrf
        <!--crea y lleva un registro de los token generados que solo pueden ser accesados a la ruta del form-->
        <label>
            Patologicos: 
            <br>
            <input type="radio" name="aplica" value="{{old('aplica')}}"/> Si<br>
            <input type="radio" name="aplica" value="{{old('aplica')}}"/> NO<br>
        </label>
        @error('nombre')
            <small>*{{$message}}</small>
            <br><br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

