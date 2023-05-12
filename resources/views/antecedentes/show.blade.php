@extends('layouts.plantilla')

@section('title', 'Paciente '. $paciente->nombre)

@section('content')


    <a href="{{route('pacientes.index')}}">Volver al listado de pacientes </a>
    <br>

    <h1>"Paciente {{$paciente->nombre}} {{$paciente->appaterno}} {{$paciente->apmaterno}} "</h1>
    <div>
        <nav>
            @include('layouts.partials.headerPaciente')
        </nav>
    </div>

    <a href="{{route('antecedentes.edit', $paciente)}}">Editar antecedentes del paciente</a>
    <br> 
    <h2>Antecendetes patologicos</h2>  
    <p><strong>Aplica </strong>{{$antecedentes->antP_aplica == 'S' ? ' Si' : 'No'}}</p>
    <p><strong>Descripcion: </strong>{{$antecedentes->antP_descripcion == null ? 'no aplica' : $antecedentes->antP_descripcion}}</p>

    <br>

    <form action="{{route('pacientes.destroy', $paciente)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    
    
@endsection

