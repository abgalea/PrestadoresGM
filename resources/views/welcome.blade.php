<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupo MELD Salud - Sistema de consulta de afiliados</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://grupomeldsalud.com.ar/assets/images/logo.png" rel="icon">
  </head>
  <body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Grupo MELD Salud</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div> --}}
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Bienvenidos al sistema <br> PRESTADORES DEL GRUPO MELD</h1>
        <p class="lead">Ingrese el número de ORDEN y consulte en línea los datos de su paciente y Orden.</p>
        <a href="/login" class="btn btn-info btn-lg">Ingresar</a>
        {{-- <form>
          <div class="form-group">
            <label for="inputAfiliado">Número de afiliado</label>
            <input type="text" class="form-control" id="inputAfiliado" placeholder="Ingrese el número de afiliado">
          </div>
          <button type="submit" class="btn btn-primary">Consultar</button>
        </form> --}}
      </div>
    </div>

    <!-- Main content -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <h2>Beneficios del sistema de Prestadores GM</h2>
          <ul class="list-group">
            <li class="list-group-item"><i class="fas fa-check-circle mr-2"></i>Consulta rápida y sencilla de datos de pacientes</li>
            <li class="list-group-item"><i class="fas fa-check-circle mr-2"></i>Acceso en línea desde cualquier dispositivo con conexión a internet</li>
            <li class="list-group-item"><i class="fas fa-check-circle mr-2"></i>Mejora la atención al paciente y agiliza los procesos administrativos</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="https://blog.hubspot.es/hubfs/media/marketingpublicidadmedico.jpeg" alt="Imagen ilustrativa" class="img-fluid">
</div>
</div>
</div>


<!-- Footer -->
<footer class="bg-dark text-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 Grupo MELD Salud. Todos los derechos reservados.</p>
      </div>
      <div class="col-md-6 text-right">
        <a href="#" class="text-light mx-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-light mx-2"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-light mx-2"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
