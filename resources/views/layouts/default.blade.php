<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"> --}}
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <title>Gráfica</title>
    <link href="public/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <div>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light float-center text-light" >
 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav"  >
      <li class="nav-item"  >
        <a class="nav-link" style="font-size:18px;color:black;" href="{{ route('home') }}">|  Início</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" style="font-size:18px;color:black;" href="{{ route('solicitante.index') }}"> |  Solicitantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-size:18px;color:black;" href="{{ route('serie.index') }}"> |  Séries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-size:18px;color:black;" href="{{ route('setores.index') }}"> |  Setores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-size:18px;color:black;" href="{{ route('disciplina.index') }}"> |  Disciplinas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-size:18px;color:black;" href="{{ route('copias.index') }}"> |  Cópias |</a>
      </li>
     
    </ul>
  </div>
</nav>
</div>
</head>
<body>
  <br>
  <div class="container">
    @yield('content')
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>