@extends('layouts.plantilla')

@section('title', 'Registrar')

@section('content')
    
    <h1>En esta pagina podras registrar un paciente</h1>
    
    <div>
        <nav>
            @include('layouts.partials.headerPaciente')
        </nav>
    </div>
    <!--<a href="{{route('pacientes.index')}}">Volver a lista de pacientes </a>-->
    <h2>Datos personales</h2>
    <form action="{{route('pacientes.store')}}" method="POST">

        @csrf
        <!--crea y lleva un registro de los token generados que solo pueden ser accesados a la ruta del form-->
        <label>
            Nombre: 
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}"/>
            <br>
        </label>
        @error('nombre')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Apellido Paterno: 
            <br>
            <input type="text" name="appaterno" value="{{old('appaterno')}}"/>
            <br>
        </label>
        @error('appaterno')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Apellido Materno: 
            <br>
            <input type="text" name="apmaterno" value="{{old('apmaterno')}}"/>
            <br>
        </label>
        @error('apmaterno')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            N° cuenta: 
            <br>
            <input type="number" name="nocuenta" value="{{old('nocuenta')}}"/>
            <br>
        </label>
        @error('nocuenta')
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Sexo: 
            <select name="sexo">
                <option value=""{{old('sexo')== '' ? 'selected' : ''}}>...</option>
                <option value="M"{{old('sexo')== 'M' ? 'selected' : ''}}>Masculino</option>
                <option value="F"{{old('sexo')== 'F' ? 'selected' : ''}}>Femenino</option>
            </select>
            <br>
        </label>
        @error('sexo')
        <small>*{{$message}}</small>
        <br><br>
        @enderror

        <label>
            Fecha Nacimiento:
            <input type="date" name="fecNac" value="{{old('fecNac')}}">
            <br>
        </label>
        @error('fecNac')
        <small>*{{$message}}</small>
        <br><br>
        @enderror

        <label>
            Carrera: 
            <select name="carrera">
                <option value=""{{old('carrera')== '' ? 'selected' : ''}}>...</option>
                <option value="Administracion"{{old('carrera')== 'Administracion' ? 'selected' : ''}}>Administracion</option>
                <option value="Contaduria"{{old('carrera')== 'Contaduria' ? 'selected' : ''}}>Contaduria</option>
                <option value="Informatica"{{old('carrera')== 'Informatica' ? 'selected' : ''}}>Informatica</option>
                <option value="Negocios Internacionales"{{old('carrera')== 'Negocios Internacionales' ? 'selected' : ''}}>Negocios Internacionales</option>
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
                <option value="0" {{old('semestre')== '' ? 'selected' : ''}}>...</option>
                <option value="1" {{old('semestre')== '1' ? 'selected' : ''}}>1</option>
                <option value="2" {{old('semestre')== '2' ? 'selected' : ''}}>2</option>
                <option value="3" {{old('semestre')== '3' ? 'selected' : ''}}>3</option>
                <option value="4" {{old('semestre')== '4' ? 'selected' : ''}}>4</option>
                <option value="5" {{old('semestre')== '5' ? 'selected' : ''}}>5</option>
                <option value="6" {{old('semestre')== '6' ? 'selected' : ''}}>6</option>
                <option value="7" {{old('semestre')== '7' ? 'selected' : ''}}>7</option>
                <option value="8" {{old('semestre')== '8' ? 'selected' : ''}}>8</option>
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
            <input type="number" name="grupo" value="{{old('grupo')}}"/>
            <br>
        </label>
        @error('grupo')
            <small>*{{$message}}</small>
            <br><br>
        @enderror
        <button type="submit">Continuar</button>
    </form>
@endsection

