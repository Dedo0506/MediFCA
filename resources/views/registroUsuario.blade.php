<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    body {
        background-color: #7ee8d5;
    }

    h1 {
        color: black;
        font-family: "Times New Roman", serif;
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .form-group {
        color: black;
        font-family: "Times New Roman", serif;
        margin-bottom: 1.5rem;
    }

    label {
        font-size: 1.25rem;
        color: #6c757d;
        font-weight: 600;
    }

    input.form-control {
        border: none;
        border-radius: 0;
        border-bottom: 2px solid #6c757d;
    }

    input.form-control:focus {
        border-color: #007bff;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .form-text {
        font-size: 1rem;
        color: #6c757d;
    }
    </style>
</head>
<body>
<form>
        <h1>Registro del paciente</h1>
        
        <fieldset>
            <legend>Información personal</legend>
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre"><br />
            
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select><br />
            
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="0"><br />
            
            <label for="numero_cuenta">Número de cuenta:</label>
            <input type="text" id="numero_cuenta" name="numero_cuenta"><br />
            
            <label for="carrera">Carrera:</label>
            <input type="text" id="carrera" name="carrera"><br />
            
            <label for="semestre">Semestre:</label>
            <input type="number" id="semestre" name="semestre" min="0"><br />
            
            <label for="grupo">Grupo:</label>
            <input type="number" id="grupo" name="grupo"><br />
        </fieldset>
        
        <fieldset>
            <legend>Historial médico</legend>
            <label for="razon_consulta">Razón de consulta:</label>
            <input type="text" id="razon_consulta" name="razon_consulta"><br />
            
            <label for="signos_vitales">Signos vitales:</label>
            <textarea id="signos_vitales" name="signos_vitales"></textarea><br />
            
            <label for="exploracion">Exploración:</label>
            <textarea id="exploracion" name="exploracion"></textarea><br />
            
            <label for="app">Antecedentes personales patológicos:</label>
            <textarea id="app" name="app"></textarea><br />
            
            <label for="ahf">Antecedentes heredofamiliares:</label>
            <textarea id="ahf" name="ahf"></textarea><br />
            
            <label for="alergias">Alergias:</label>
            <textarea id="alergias" name="alergias"></textarea><br />
        </fieldset>
        <br />
        <button type="submit">Guardar registro</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js
