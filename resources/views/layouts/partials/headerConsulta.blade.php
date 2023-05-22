
<style>
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background:rgb(27, 80, 224);
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: rgb(134, 183, 206);
  }

  .active {
    background: white;
    color: blue;
  }
</style>

<div class="navbar-nav">
    <nav>
        <?php
        foreach ($consultas as $consulta) {
          $paciente = $consulta->paciente;
        }
        ?>
        <ul>
            <h1 style="color:beige; font-weight:700;">Paciente {{$paciente->nombre}} {{$paciente->appaterno}} {{$paciente->apmaterno}} </h1>
            <li><a  href="{{route('pacientes.show', $paciente->id) }}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Datos personales</a></li>
            <li><a  href="{{route('antecedentes.show',$paciente->id)}} " class="{{request()->routeIs('antecedentes.*') ? 'active' : ''}}">Antecedentes</a></li>
            <li><a href="{{route('consulta.show', $paciente->id)}} " class="{{request()->routeIs('consulta.*') ? 'active' : ''}}">Consultas</a></li>
        </ul>
    </nav>
</div>
