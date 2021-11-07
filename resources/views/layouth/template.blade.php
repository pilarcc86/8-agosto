<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Page | @yield('title')</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca-de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactanos">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 bg-danger">
            <br>
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">0</li>
                <li class="list-group-item">1</li>
                <li class="list-group-item">2</li>
                <li class="list-group-item">3</li>
                <li class="list-group-item">4</li>
            </ul>
            <br>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="bg-danger">
        <div class="container-fluid">
            <p>@Hola .ing</p>
        </div>
    </div>
</footer>
</body>
</html>
