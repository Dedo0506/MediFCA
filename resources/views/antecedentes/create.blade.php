@extends('layouts.plantilla')

@section('title', 'Registrar')

@section('content')

    <div>
        <nav>
            @include('layouts.partials.headerPacienteCreate')
        </nav>
    </div>

    <h1>Antecedentes</h1>
    <form method="POST" action="{{ route('antecedentes.store', ['paciente' => $paciente]) }}">

        @csrf
        <!--crea y lleva un registro de los token generados que solo pueden ser accesados a la ruta del form-->  
        <input type="hidden" name="paciente_id" value="{{ $paciente->id }}">
        <h2>Antecendetes patologicos</h2>  
            <label>
                Aplica: 
                <select name="antP_aplica">
                    <option value="N"{{old('antP_aplica')== 'N' ? 'selected' : ''}}>No</option>
                    <option value="S"{{old('antP_aplica')== 'S' ? 'selected' : ''}}>Si</option>
                </select>
            </label>
            @error('antP_aplica')
                <small>*{{$message}}</small>
                <br><br>
            @enderror
            <label>
                Descripcion: 
                <textarea type="text" name="antP_descripcion" rows="5">{{old('antP_aplica' == 'N' ? 'readonly' : '' )}}</textarea>
                <br>
            </label>
            @error('antP_descripcion')
                <small>*{{$message}}</small>
                <br><br>
            @enderror

        <h2>Antecendetes no patologicos</h2>  
            
            <h4>vacunas:</h4>
            
            <label>Covid-19</label>
            <input type="checkbox" name="vacunas[]" value="Vacuna 1">
            
            <label>Tetanos</label>
            <input type="checkbox" name="vacunas[]" value="Vacuna 2">
            
            <label>Influenza</label>
            <input type="checkbox" name="vacunas[]" value="Vacuna 3">
            
            <br><br>
            <label>
                Alimentacion: 
                <br>
                <input type="text" name="alimentacion" value="{{old('alimentacion')}}"/>
                <br>
            </label>
            @error('alimentacion')
                <small>*{{$message}}</small>
                <br><br>
            @enderror

            <label>
                Horas de sueño: 
                <br>
                <input type="number" name="hrs_sueno" value="{{old('hrs_sueno')}}"/>
                <br>
            </label>
            @error('hrs_sueno')
                <small>*{{$message}}</small>
                <br><br>
            @enderror


        <h2>Antecendetes heredo familiares</h2>  
            <select name="enfermedad">
                <option value="ninguna"{{old('enfermdad')== '' ? 'selected' : ''}}>Ninguna</option>
                <option value="Diabetes"{{old('enfermedad')== 'Diabetes' ? 'selected' : ''}}>Diabetes</option>
                <option value="Hipertension"{{old('enfermedad')== 'Hipertension' ? 'selected' : ''}}>Hipertension</option>
                <option value="Asma"{{old('enfermedad')== 'Asma' ? 'selected' : ''}}>Asma</option>
                <option value="Cancer"{{old('enfermedad')== 'Cancer' ? 'selected' : ''}}>Cancer</option>
            </select>
            @error('enfermedad')
                <small>*{{$message}}</small>
                <br><br>
            @enderror

            <label>
                Familiar(es): 
                <input type="text" name="familiar" value="{{old('familiar')}}"/>
                <br>
            </label>
            @error('familiar')
                <small>*{{$message}}</small>
                <br><br>
            @enderror
            
        <h2>Antecendetes ginecologicos </h2>  
            
            <label>
                Aplica: 
                <select name="antG_aplica">
                    <option value="N"{{old('antG_aplica')== 'N' ? 'selected' : ''}}>No</option>
                    <option value="S"{{old('antG_aplica')== 'S' ? 'selected' : ''}}>Si</option>
                </select>
            </label>
            @error('antG_aplica')
                <small>*{{$message}}</small>
                <br><br>
            @enderror
            
            <label>
                Descripcion: 
                <textarea type="text" name="descripcionG" rows="5">{{old('descripcionG')}}</textarea>
                <br>
            </label>
            @error('descripcionG')
                <small>*{{$message}}</small>
                <br><br>
            @enderror
            
            <br>
        
        <button type="submit">Enviar formulario</button>

    </form>
@endsection

