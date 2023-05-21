@extends('principal')

@section('title', 'Editar')

@section('menu')
<style>
    .col-md-8 {
    flex: 0 0 auto;
    width: auto;
    }
</style>

<link href="/resources/css/create.css" rel="stylesheet">
    <div>
        <nav>
            @include('layouts.partials.headerPacienteShow')
        </nav>
    </div>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Modificar datos personales') }}</div>
          <div class="card-body">
                <form action="{{route('pacientes.update', $paciente)}}" method="POST">
                    @csrf
                    @method('put')
                    <!--crea y lleva un registro de los token generados que solo pueden ser accesados a la ruta del form-->
                    <div class="form-group">
                        <label class="form-label">
                            Nombre: 
                            <br>
                            <input type="text" class="form-control"name="nombre" value="{{old('nombre', $paciente->nombre)}}"/>
                            <br>
                        </label>
                    
                        @error('nombre')
                            <small>*{{$message}}</small>
                            <br><br>
                        @enderror
                    
                        <label class="form-label">
                            Apellido Paterno: 
                            <br>
                            <input type="text" class="form-control" name="appaterno" value="{{old('appaterno',$paciente->appaterno)}}"/>
                            <br>
                        </label>
                        @error('appaterno')
                            <small>*{{$message}}</small>
                            <br><br>
                        @enderror
                
                        <label class="form-label">
                            Apellido Materno: 
                            <br>
                            <input type="text" class="form-control" name="apmaterno" value="{{old('apmaterno',$paciente->apmaterno)}}"/>
                            <br>
                        </label>
                        @error('apmaterno')
                            <small>*{{$message}}</small>
                            <br><br>
                        @enderror

                        <label class="form-label">
                            N° cuenta: 
                            <br>
                            <input type="number" class="form-control" name="nocuenta" value="{{old('nocuenta', $paciente->nocuenta)}}"/>
                            <br>
                        </label>
                        @error('nocuenta')
                            <small>*{{$message}}</small>
                            <br><br>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Sexo: 
                            <select class="form-control" name="sexo">
                                <option value="" {{ (old('sexo', $paciente->sexo) == '') ? 'selected' : '' }}>Seleccione</option>
                                <option value="M" {{old('sexo', $paciente->sexo) == 'M' ? 'selected' : '' }}>Masculino</option>
                                <option value="F" {{old('sexo', $paciente->sexo) == 'F' ? 'selected' : '' }}>Femenino</option>
                            </select>
                            <br>
                        </label>
                        @error('sexo')
                        <small>*{{$message}}</small>
                        <br><br>
                        @enderror
                        
                        <label class="form-label">
                            Fecha Nacimiento:
                            <input type="date"  class="form-control" name="fecNac" value="{{old('fecNac', $paciente->fecNac)}}">
                            <br>
                        </label>
                        @error('fecNac')
                        <small>*{{$message}}</small>
                        <br><br>
                        @enderror

                        <label class="form-label">
                            Carrera: 
                            <select class="form-control" name="carrera">
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
                        
                        <label class="form-label">
                            Semestre: 
                            <select class="form-control" name="semestre" >
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
                
                        <label class="form-label">
                            Grupo: 
                            <br>
                            <input type="number" class="form-control" name="grupo" value="{{old('grupo', $paciente->grupo)}}"/>
                            <br>
                        </label>
                        @error('grupo')
                            <small>*{{$message}}</small>
                            <br><br>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit">Actualizar informacion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

