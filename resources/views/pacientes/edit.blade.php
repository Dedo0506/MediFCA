@extends('layouts.plantilla')

@section('title', 'Editar')

@section('content')
    <h1>En esta pagina podras modifcar al paciente <br>{{$paciente->nombre}} {{$paciente->appaterno}} {{$paciente->apmaterno}}</h1>
    
    <div>
        <nav>
            @include('layouts.partials.headerPaciente')
        </nav>
    </div>

    <!--<a href="{{route('pacientes.index')}}">Volver a lista de pacientes </a>-->
    <form action="{{route('pacientes.update', $paciente)}}" method="POST">
        <!--html de forma nativa no entiende metodo put por ello se deja post pero se agraga el @ method con put-->

        @csrf
        <!--crea y lleva un registro de los token generados que solo pueden ser accesados a la ruta del form-->
        @method('put')
        <label>
            Nombre: 
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $paciente->nombre)}}"/>
            <br>
        </label>
        @error('nombre')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Apellido Paterno: 
            <br>
            <input type="text" name="appaterno" value="{{old('appaterno',$paciente->appaterno)}}"/>
            <br>
        </label>
        @error('appaterno')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Apellido Materno: 
            <br>
            <input type="text" name="apmaterno" value="{{old('apmaterno', $paciente->apmaterno)}}"/>
            <br>
        </label>
        @error('apmaterno')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            N° cuenta: 
            <br>
            <input type="number" name="nocuenta" value="{{old('nocuenta', $paciente->nocuenta)}}"/>
            <br>
        </label>
        @error('nocuenta')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Sexo: 
            <select name="sexo">
                <option value="" {{ (old('sexo', $paciente->sexo) == '') ? 'selected' : '' }}>...</option>
                <option value="M" {{old('sexo', $paciente->sexo) == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{old('sexo', $paciente->sexo) == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
            <br>
        </label>
        @error('sexo')
        <small>*{{$message}}</small>
        <br><br>
        @enderror

        <label>
            Fecha Nacimiento:
            <input type="date" name="fecNac" value="{{old('fecNac', $paciente->fecNac)}}">
            <br>
        </label>
        @error('fecNac')
        <small>*{{$message}}</small>
        <br><br>
        @enderror

        <label>
            Carrera: 
            <select name="carrera">
                <option value="" {{old('carrera', $paciente->carrera)== '' ? 'selected' : ''}}>...</option>
                <option value="Administracion" {{old('carrera', $paciente->carrera)== 'Administracion' ? 'selected' : ''}}>Administracion</option>
                <option value="Contaduria" {{old('carrera', $paciente->carrera)== 'Contaduria' ? 'selected' : ''}}>Contaduria</option>
                <option value="Informatica" {{old('carrera', $paciente->carrera)== 'Informatica' ? 'selected' : ''}}>Informatica</option>
                <option value="Negocios Internacionales" {{old('carrera', $paciente->carrera)== 'Negocios Internacionales' ? 'selected' : ''}}>Negocios Internacionales</option>
            </select>
            <br>
        </label>
        @error('carrera')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Semestre: 
            <select name="semestre">
                <option value="0" {{old('semestre', $paciente->semestre)== '0' ? 'selected' : ''}}>...</option>
                <option value="1" {{old('semestre', $paciente->semestre)== '1' ? 'selected' : ''}}>1</option>
                <option value="2" {{old('semestre', $paciente->semestre)== '2' ? 'selected' : ''}}>2</option>
                <option value="3" {{old('semestre', $paciente->semestre)== '3' ? 'selected' : ''}}>3</option>
                <option value="4" {{old('semestre', $paciente->semestre)== '4' ? 'selected' : ''}}>4</option>
                <option value="5" {{old('semestre', $paciente->semestre)== '5' ? 'selected' : ''}}>5</option>
                <option value="6" {{old('semestre', $paciente->semestre)== '6' ? 'selected' : ''}}>6</option>
                <option value="7" {{old('semestre', $paciente->semestre)== '7' ? 'selected' : ''}}>7</option>
                <option value="8" {{old('semestre', $paciente->semestre)== '8' ? 'selected' : ''}}>8</option>
            </select>
            <br>
        </label>
        @error('semestre')
            <small>*{{$message}}</small>
            <br><br>
        @enderror
        <label>
            Grupo: 
            <br>
            <input type="number" name="grupo" value="{{old('grupo', $paciente->grupo)}}"/>
            <br>
        </label>
        @error('grupo')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <br>
        <button type="submit">Actualizar informacion</button>
    </form>
@endsection

