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

    <div class="row bloqueMismoAlto fondoBloque">
      <div class="col-xs-12 col-sm-12 colSinPadding">
        <h2 class="subtituloBloqueRojo">
          Brindamos soluciones a nuestros clientes
        </h2>
        <h2 class="descripcionBloqueHome">
          Te ofrecemos una gran variedad de productos y servicios para ser tu mejor alternativa.
          <br>
          Contamos con 21 sucursales para estar siempre cerca de ti.
        </h2>
      </div>
    </div>

    <div class="row fondoOtrosArticulos">
      <div class="col-md-10 col-md-offset-1">
        <div class="row bloqueSucursales">
          <div class="col-sm-8">
            <p class="colonia">
              Ingresa tu colonia y encuentra la sucursal más cerca de tí.
            </p>
            <div id="map"></div>
          </div>
          <div class="col-sm-4 comboHome">
            <div class="row">
              <div class="col-md-12">
                <div id="erroresFormulario"></div>
              </div>
            </div>
            <form name="fBuscaTienda" id="fBuscaTienda" method="post" action="https://bazareno.com.mx/home.php">
              <div class="form-group">
                <label for="colonia" class="labelInput">Colonia</label>
                <select id="colonia" name="colonia" tabindex="1" class="form-control selectBazareno ancho100">
                  <option value=""></option>
                  <option value="10-DE-MAYO">10 DE MAYO</option>
                  <option value="ARBOLEDAS">ARBOLEDAS</option>
                  <option value="BUENAVISTA">BUENAVISTA</option>
                  <option value="BUENOS-AIRES">BUENOS AIRES</option>
                  <option value="CENTRO">CENTRO</option>
                  <option value="DESARROLLO-URBANO-3-RÍOS">DESARROLLO URBANO 3 RÍOS</option>
                  <option value="DIAZ-ORDAZ">DIAZ ORDAZ</option>
                  <option value="GUADALUPE">GUADALUPE</option>
                  <option value="GUADALUPE-VICTORIA">GUADALUPE VICTORIA</option>
                  <option value="LA-PALMA">LA PALMA</option>
                  <option value="MONTEBELLO">MONTEBELLO</option>
                  <option value="NAKAYAMA">NAKAYAMA</option>
                  <option value="PRADERA-DORADA">PRADERA DORADA</option>
                  <option value="PRADOS-DE-LA-CONQUISTA">PRADOS DE LA CONQUISTA</option>
                  <option value="SAN-RAFAEL">SAN RAFAEL</option>
                  <option value="TIERRA-BLANCA">TIERRA BLANCA</option>
                  <option value="VILLA-DEL-REAL">VILLA DEL REAL</option>
                </select>
              </div>
              <div class="form-group text-center">
                <input type="button" name="bBuscaTiendaHome" id="bBuscaTiendaHome" value="ENVIAR" tabindex="2" class="botonColonia ancho250"
                  onclick="gtag('event', 'click', {'event_category' : 'Botones','event_label' : 'Sección Home Encuentra tu tienda'});">
              </div>
            </form>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="10-DE-MAYO">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Patria </h4>
            <p class="direccionTienda">
              AV. PATRIA SUR NRO.1715 ENTRE LAS CALLES AV. MEXICO 68 Y BUGAMBILIAS
              <br>Col. 10 DE MAYO C.P. 80270<br> <b>Tel.</b>
              <a href="tel:66 77 18 03 97" class="telTienda">
                66 77 18 03 97 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> 10:00 a 15:00
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="ARBOLEDAS">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Arboledas </h4>
            <p class="direccionTienda">
              AV. ALVARO OBREGON 3025 Nte.
              ENTRE LAS CALLES MARIA DE JESUS NEDA Y JOSE RAUL FRANCO BARRERA
              <br>Col. ARBOLEDAS C.P. 80010<br> <b>Tel.</b>
              <a href="tel:66 77 53 43 03" class="telTienda">
                66 77 53 43 03 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="BUENAVISTA">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Buenavista </h4>
            <p class="direccionTienda">
              AV. JOSE ORTIZ DE DOMINGUEZ NRO. 2063 PTE. INT.1
              ENTRE LAS CALLES COSMOS Y SATELITE
              <br>Col. BUENAVISTA C.P. 80014<br> <b>Tel.</b>
              <a href="tel:66 77 53 59 69" class="telTienda">
                66 77 53 59 69 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> 10:00 a 15:00
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="BUENOS-AIRES">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Buenos Aires </h4>
            <p class="direccionTienda">
              BLVD. MANUEL J. CLOUTHIER NRO.4038 ENTRE LAS CALLES CRUZ GALVEZ Y ROSENDO RODRIGUEZ
              <br>Col. BUENOS AIRES C.P. 80199<br> <b>Tel.</b>
              <a href="tel:66 71 35 20 10" class="telTienda">
                66 71 35 20 10 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> 10:00 a 15:00
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="CENTRO">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Escobedo </h4>
            <p class="direccionTienda">
              CALLE MARIANO ESCOBEDO PTE. NRO.167
              ENTRE LAS CALLES DOMINGO RUBI Y JUAN CARRASCO
              <br>Col. CENTRO C.P. 80000<br> <b>Tel.</b>
              <a href="tel:66 77 16 76 26" class="telTienda">
                66 77 16 76 26 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Juárez </h4>
            <p class="direccionTienda">
              CALLE BENITO JUAREZ PTE. NRO.80-A
              ENTRE LAS CALLES JUAN CARRASCO Y ALVARO OBREGON
              <br>Col. CENTRO C.P. 80000<br> <b>Tel.</b>
              <a href="tel:66 77 15 65 05" class="telTienda">
                66 77 15 65 05 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Navolato </h4>
            <p class="direccionTienda">
              CALLE JESÚS ALMADA OTE NRO. 64-B
              ENTRE LAS CALLES AV. ANTONIO ROSALES Y B. JUAREZ
              <br>Col. CENTRO C.P. 80370<br> <b>Tel.</b>
              <a href="tel:67 27 27 16 12" class="telTienda">
                67 27 27 16 12 </a>
              <br>
              <b>Lunes a Viernes:</b> 9:00 a 18:00<br />
              <b>Sábados:</b> 9:00 a 17:00<br />
              <b>Domingos:</b> 10:00 a 15:00
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Palacio </h4>
            <p class="direccionTienda">
              CALLE LAZARO CARDENAS SUR NRO.524
              ENTRE LAS CALLES AGUILAR BARRAZA Y CONSTITUCION
              <br>Col. CENTRO C.P. 80000<br> <b>Tel.</b>
              <a href="tel:66 77 13 81 46" class="telTienda">
                66 77 13 81 46 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="DESARROLLO-URBANO-3-RÍOS">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Central </h4>
            <p class="direccionTienda">
              CENTRAL MILENIUM REG. L.60 ENTRE LAS CALLES ROLANDO ARJONA Y VIALIDAD LATERAL
              <br>Col. DESARROLLO URBANO 3 RÍOS C.P. 80100<br> <b>Tel.</b>
              <a href="tel:66 77 17 16 20" class="telTienda">
                66 77 17 16 20 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="DIAZ-ORDAZ">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Díaz Ordaz </h4>
            <p class="direccionTienda">
              CALLE ANTONIO ANCONA ALBERTOS NRO.2758
              ENTRE LAS CALLES CONST. SEBASTIAN ALLENDE Y JOSE NATIVIDAD MACIAS
              <br>Col. DIAZ ORDAZ C.P. 80180<br> <b>Tel.</b>
              <a href="tel:66 77 61 33 10" class="telTienda">
                66 77 61 33 10 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> 10:00 a 15:00
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="GUADALUPE">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Bravo </h4>
            <p class="direccionTienda">
              GENERAL NICOLAS BRAVO SUR NO.1870
              <br>Col. GUADALUPE C.P. 80220<br> <b>Tel.</b>
              <a href="tel:66 77 52 08 18" class="telTienda">
                66 77 52 08 18 </a>
              <br>
              <b>Lunes a Viernes:</b> 9:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="GUADALUPE-VICTORIA">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Revolución </h4>
            <p class="direccionTienda">
              AV. REVOLUCION SUR NRO. 1401
              ENTRE LAS CALLES MARIANO AZUELA Y JOSE VASCONCELOS
              <br>Col. GUADALUPE VICTORIA C.P. 80240<br> <b>Tel.</b>
              <a href="tel:66 77 18 32 19" class="telTienda">
                66 77 18 32 19 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> 10:00 a 15:00
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Sanalona </h4>
            <p class="direccionTienda">
              BLVD. FRANCISCO I. MADERO NRO.1966
              OTE. ENTRE LAS CALLES ABELARDO MEDINA DIAZ Y GILBERTO OWEN
              <br>Col. GUADALUPE VICTORIA C.P. 80240<br> <b>Tel.</b>
              <a href="tel:66 77 15 88 55" class="telTienda">
                66 77 15 88 55 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="LA-PALMA">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              La Palma </h4>
            <p class="direccionTienda">
              AV. DEFENSA NACIONAL SUR # 74
              NAVOLATO,SINALOA
              <br>Col. LA PALMA C.P. 80349<br> <b>Tel.</b>
              <a href="tel:66 77 22 08 05" class="telTienda">
                66 77 22 08 05 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="MONTEBELLO">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Walmart </h4>
            <p class="direccionTienda">
              AV. ALVARO OBREGON SUR NRO.2891 INT 10
              ENTRE LAS CALLES MEXICO 68 Y CALLE SIN NOMBRE (CENTRO COMERCIAL WALMART)
              <br>Col. MONTEBELLO C.P. 80227<br> <b>Tel.</b>
              <a href="tel:66 77 15 80 40" class="telTienda">
                66 77 15 80 40 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="NAKAYAMA">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Nakayama </h4>
            <p class="direccionTienda">
              CALZADA LAS TORRES NRO.3098 INT.2
              ENTRE LAS CALLES CRUZ MEDINA Y ERNESTO DAMMY
              <br>Col. NAKAYAMA C.P. 80194<br> <b>Tel.</b>
              <a href="tel:66 77 10 89 38" class="telTienda">
                66 77 10 89 38 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="PRADERA-DORADA">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              U de O </h4>
            <p class="direccionTienda">
              BLVD. LOLA BELTRAN NRO. 3551 PTE.
              ENTRE LAS CALLES CIRCUITO INTERIOR Y CALLE DE LOS ALTOS
              <br>Col. PRADERA DORADA C.P. 80058<br> <b>Tel.</b>
              <a href="tel:66 77 54 58 87" class="telTienda">
                66 77 54 58 87 </a>
              <br>
              <b>Lunes a Viernes:</b> 8:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="PRADOS-DE-LA-CONQUISTA">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              La Conquista </h4>
            <p class="direccionTienda">
              BLVD. CONQUISTADORES # 1125
              ENTRE LA CALLE LUIS F. MARQUINA Y BLVD. LOLA BELTRÁN
              <br>Col. PRADOS DE LA CONQUISTA C.P. 80058<br> <b>Tel.</b>
              <a href="tel:66 77 23 36 09" class="telTienda">
                66 77 23 36 09 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> 10:00 a 15:00
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="SAN-RAFAEL">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Zapata </h4>
            <p class="direccionTienda">
              BLVD. EMILIANO ZAPATA NRO.4988
              ENTRE LAS CALLES FRAY MARCOS DE NIZA Y DIEGO FERNANDEZ DE PROADO
              <br>Col. SAN RAFAEL C.P. 80150<br> <b>Tel.</b>
              <a href="tel:66 77 61 01 11" class="telTienda">
                66 77 61 01 11 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="TIERRA-BLANCA">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Novena </h4>
            <p class="direccionTienda">
              AV. UNIVERSITARIOS NRO. 71 INT 3
              ENTRE LAS CALLES EUSTAQUIO BUELNA Y R. MARQUEZ
              <br>Col. TIERRA BLANCA C.P. 80030<br> <b>Tel.</b>
              <a href="tel:66 77 53 80 10" class="telTienda">
                66 77 53 80 10 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row tiendas bloqueMismoAltoSucursal fondoGris oculta" id="VILLA-DEL-REAL">
          <div class="col-xs-12 col-sm-6 lineaTienda">
            <h4 class="tituloTienda">
              Villa del Real </h4>
            <p class="direccionTienda">
              AV. PASEO DEL REY NO.17
              ENTRE LAS CALLES BLVD. FCO.I MADERO E INFANTA ELENA
              <br>Col. VILLA DEL REAL C.P. 80247<br> <b>Tel.</b>
              <a href="tel:66 77 62 40 08" class="telTienda">
                66 77 62 40 08 </a>
              <br>
              <b>Lunes a Viernes:</b> 10:00 a 19:00<br />
              <b>Sábados:</b> 10:00 a 17:00<br />
              <b>Domingos:</b> cerrado
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 separadorRow"></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2 class="subtituloBloqueRojo10">
              Porque es más sencillo
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <p class="porque">
              <span class="negritas">Aceptamos</span> casi cualquier artículo*
              <br>
              (oro, herramientas, electrónicos, etc.)
            </p>
          </div>
          <div class="col-sm-4">
            <p class="porque">
              Lo <span class="negritas">valuamos</span> mejor que todos
            </p>
          </div>
          <div class="col-sm-4">
            <p class="porque">
              Te <span class="negritas">prestamos</span> muy rápido
            </p>
          </div>
        </div>
        <div class="row fondoFacil">
          <div class="col-sm-12">
            <img src="content/img/fondos/bazareno-empena-compra-vende.jpg" class="img-responsive center-block" alt="Bazareño: Empeña -> Compra -> Vende">
            <br><br><br>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>





  </body>
</html>

<div class="">
  Esto es Bazareño
</div>
