@extends('layouts.app')

@section('content')
<div class="container bg-white pb-4" >
    <h2>Registro de actividades</h2>   
    <label>Actividad</label> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">              
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Deporte
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Baloncesto</a>
                        <a class="dropdown-item" href="#">Tenis de mesa</a>                        
                        <a class="dropdown-item" href="#">Futbol</a>
                        <a class="dropdown-item" href="#">Futbol de salon</a>
                        <a class="dropdown-item" href="#">Voleibol</a>
                        <a class="dropdown-item" href="#">Gimnasio</a>
                        <a class="dropdown-item" href="#">Parque recreacional</a>
                        <a class="dropdown-item" href="#">Natación</a>
                        <a class="dropdown-item" href="#">Ajedrez</a>
                        <a class="dropdown-item" href="#">Atletismo</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cultura
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Música</a>
                        <a class="dropdown-item" href="#">Teatro</a>                        
                        <a class="dropdown-item" href="#">Danza</a>
                        <a class="dropdown-item" href="#">Artes plásticas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Éxito académico
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Monitorias</a>
                        <a class="dropdown-item" href="#">Jóvenes en acción</a>                        
                        <a class="dropdown-item" href="#">Casa estudiantil</a>
                        <a class="dropdown-item" href="#">Bono estudiantil</a>
                        <a class="dropdown-item" href="#">Apoyo res 050</a>
                        <a class="dropdown-item" href="#">Cafetría</a>
                        <a class="dropdown-item" href="#">Generación E</a>
                        <a class="dropdown-item" href="#">Revición DDHH</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Diversidad y género
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Comunidades étnias</a>
                        <a class="dropdown-item" href="#">Género</a>                                                
                    </div>
                </li>
                
          </ul>          
        </div>
    </nav>

      <form method="POST" action="#">

        <div class="form-group">
          <label for="title">Título de la actividad</label>
          <input type="text" class="form-control" id="title" 
                aria-describedby="emailHelp" placeholder="Escriba el título de la nueva actividad"
                required>          
        </div>

        <div class="form-group">
          <label for="description">Descripción</label>          
          <textarea class="form-control" rows="3" id="description" 
                    placeholder="Escriba la descripción de la nueva actividad" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="image">Adjuntar imagen</label>
            <input type="file" id="image" 
                    class="btn btn-outline-primary" required>         
        </div>
        <button type="submit" class="btn btn-success">Crear</button>

      </form> 

 </div>

@endsection
