<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Quized</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <header>
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#373741;">
      <a class="navbar-brand" href="/">
        <img src="image/logo.png" width="150" height="60" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php" style="color:white;"></a> <span class="sr-only">(current)</span></a>
          </li>

          <li class=nav-item active>
            <a class="nav-link" href="/jugar" style="color:white;"><b>JUGAR</b><span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"  style="color:white;"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>PREGUNTAS FRECUENTES</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Necesito estar registrado?</a>
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Cómo puedo conseguir más puntos?</a>
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Qué son los retos?</a>
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Cómo funcionan los puntos en los retos?</a>
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Cómo retar a un amigo?</a>
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Cómo puedo consultar los resultados de mis amigos?</a>
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Cómo agregar una pregunta?</a>
              <a class="dropdown-item" href="/preguntasfrecuentes">¿Para que sirve el botón de denunciar?</a>

            </div>
          </li>

        </ul>
        <span class="navbar-text"><a class="nav-link" href="/log" style="color:white;"><b>INICIAR SESIÓN</b></a></span>

      </div>
      </nav>
    </header>

@yield('principal')

  <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contactenos</h5>
          <p>Para contactarse con nosotros, haga click en los enlases de las redes sociales, y uno de nuestros operadores
          se comunicará con usted.</p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Jugar en facebook</h5>
          <ul class="list-unstyled">
            <li>
              <a ><a href="#"><img src="image/jfb.png" style="width:100%"</a></a>
            </li>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Descarga en App Store</h5>
          <ul class="list-unstyled">
            <li>
            <a><a href="#"><img src="image/app.jpg" style="width:100%"</a></a>
            </li>
        </ul>
      </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Descarga en Google Play</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!"><img src="image/googleplay.png" style="width: 100%"</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"><a href="http://www.facebook.com" ><img src="image/fb.png" <a href="#" style="width:60px; height:60px; border-radius:50%;></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> <a href="http://www.twitter.com" ><img src="image/tw.jpg" style="width: 60px; height:60px; border-radius:50%;> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> <a href="http://www.google.com" ><img src="image/google.jpg" style="width:60px; height:60px; border-radius:50%;></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> <a href="http://www.linkedin.com" ><img src="image/link.png"  style="width: 60px; height:60px; border-radius:50%; href="#"></i>
        </a>
    </li>
    </ul>
  <hr>
    <!-- Social buttons -->
  <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> bbj.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
</body>
</body>
</html>
