<?php include 'Header.php' ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#f43443">
    <title>Bazareño | Empeña &#8226;Compra &#8226;Vende</title>
    <!-- Favicon file -->
    <link rel="apple-touch-icon" sizes="57x57" href="content/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="content/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="content/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="content/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="content/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="content/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="content/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="content/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="content/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="content/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="content/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="content/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="content/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="content/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="content/favicon/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="content/favicon/manifest.json">
    <link rel="stylesheet" href="content/css/style.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://bazareno.com.mx/wp-content/themes/bazareno/recs/favicon/ms-icon-144x144.png">
    <script language="JavaScript">
      var BASE_URL = "content/index.html";
    </script>

  </head>
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid menuMobile">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Alternar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'Logo'});">
            <img src="content/img/logos/bazareno.png" class="img-responsive logo" alt="Bazareño Te entendemos, te ayudamos y te prestamos rápido">
          </a>
        </div>
        <form class="form-inline" action="https://bazareno.com.mx/" method="get" id="buscador">
          <div class="formularioBuscar">
            <label class="textoBuscar" for="buscar">Te entendemos, te ayudamos y te prestamos rápido.</label>
            <input class="inputBuscar" type="text" name="buscador" id="buscador" value="" placeholder="">
            <a href="https://www.facebook.com/BazarenoOficial/" target="_blank" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'Facebook'});">
              <img src="content/img/iconos/facebook.png" class="img-responsive enLinea" alt="Facebook">
            </a>
          </div>
        </form>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav menuBazareno">
            <li><a href="nosotros/index.html" class="menuBordeDerecho" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'Nosotros'});">NOSOTROS</a></li>
            <li><a href="encuentra-tu-tienda/index.html" class="menuBordeDerecho" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'Encuentra tu tienda'});">ENCUENTRA TU TIENDA</a></li>
            <li><a href="empenar/index.html" class="menuBordeDerecho" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'Empeñar'});">EMPEÑAR</a></li>
            <li><a href="comprar/index.html" class="menuBordeDerecho" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'Comprar'});">COMPRAR</a></li>
            <li><a href="contacto/index.html" class="menuBordeDerecho" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'Contáctanos'});">CONTÁCTANOS</a></li>
            <li><a href="preguntas-frecuentes/index.html" onclick="gtag('event', 'click', {'event_category' : 'Menú','event_label' : 'FAQS'});">FAQ'S</a></li>
            <!--<li><a href="#">BLOG</a></li>-->
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="content/img/bazareno-oro.jpg" class="img-responsive imagenObjetivo" alt="Te entendemos, te ayudamos y te prestamos rápido">
        </div>
        <div class="item ">
          <img src="content/img/bazareno-articulos-disponibles.jpg" class="img-responsive imagenObjetivo" alt="Artículos disponibles">
        </div>
        <div class="item ">
          <img src="content/img/uno_02012020.jpg" class="img-responsive imagenObjetivo" alt="">
        </div>
      </div>

      <!-- Carousel controls -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>



  </body>
</html>

<div class="">
  Esto es Bazareño
</div>
