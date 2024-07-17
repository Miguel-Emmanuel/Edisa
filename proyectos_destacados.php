<?php
require("header.php");
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de Proyectos con Carrusel</title>
  <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="galeria.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Estilos personalizados -->

</head>
<body>
<div class="slider-thumb">
<div class="container mt-5">
  <!-- Primer proyecto con Carrusel -->
   
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8">
        <!-- Descripción del primer proyecto -->
        <h2>PLAZA COMERCIAL NOVUM CUAUHNAHUAC.</h2>
        <p>Descripción detallada del proyecto 1.</p>
      </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/novum1.png" alt="Proyecto 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/novum2.png" alt="Proyecto 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/novum3.png" alt="Proyecto 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/novum4.png" alt="Proyecto 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/novum5.png" alt="Proyecto 1">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Segundo proyecto con Carrusel -->
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8 order-md-2">
      <!-- Descripción del segundo proyecto -->
      <h2>DEPARTAMENTOS RESIDENCIALES
      </h2>
      <p>Construcción y deseño de departamentos residenciales.</p></p>
    </div>
    <div class="col-md-4 order-md-1">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial1.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial2.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial3.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial4.png" alt="">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Tercer proyecto con Carrusel -->
  <div class="row mb-4" id="container-carrusel">  
      <div class="col-md-8">
      <!-- Descripción del tercer proyecto -->
      <h2>PLAZA VALLE DON CAMILO EDO DE MEX.</h2>
      <p>En este proyecto realizamos la impearmibilizacion de esta plaza.</p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
  
      <div id="carouselExample3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/camilo1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/camilo2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/camilo3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/camilo4.png" alt="Proyecto 3">
          </div>
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
 
  </div>





  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
  <div class="col-md-8 order-md-2">
        <!-- Descripción del tercer proyecto -->
        <h2>CONJUNTO RESIDENCIAL CASA DE LAS FUENTES METEPEC
        </h2>
        <p>En este proyecto realizamos la construccion de .</p>
      </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample4" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/residencial4.png" alt="Proyecto 3">
          </div>
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample4" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample4" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
 
  </div>




<!-- /////////////CARRUSEL 5  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
  <div class="col-md-8">

    <!-- Descripción del tercer proyecto -->
    <h2>SISTEMA EPOXICO IAC GROUP PLANTA TOLUCA .

    </h2>
    <p>En este proyecto realizamos el sistema epoxico de IAC PLANTA TOLUCA.</p>
  </div>
  <div class="col-md-4">


      <!-- Carrusel de imágenes -->
      <div id="carouselExample5" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/iac2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/iac1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/iac3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/iac4.png" alt="Proyecto 3">
          </div>
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample5" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample5" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </div>





<!-- /////////////CARRUSEL 6  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
   <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8 order-md-2">
      <!-- Descripción del tercer proyecto -->
      <h2>PARQUE ACUATICO .

      </h2>
      <p>PARQUE ACUATICO “MAYAN PALACE ACAPULCO” SISTEMA EPOXICO
      .</p>
    </div>
    <div class="col-md-4 order-md-1">

      <!-- Carrusel de imágenes -->
      <div id="carouselExample6" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/palace1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/palace2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/palace3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/palace1.png" alt="Proyecto 3">
          </div>
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample6" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample6" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>

  </div>




  
<!-- /////////////CARRUSEL 7  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8">
      <!-- Descripción del tercer proyecto -->
      <h2>WURTH MORELOS. 

      </h2>
      <p>SISTEMA EPOXICO WURTH MORELOS.</p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample7" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/morelos1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/morelos2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/morelos3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/morelos4.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/morelos5.png" alt="Proyecto 3">
          </div>
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample7" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample7" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>

  </div>






  
<!-- /////////////CARRUSEL 8  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
  <div class="col-md-8 order-md-2">

      <!-- Descripción del tercer proyecto -->
      <h2>PLANTA INDUSRIAL AUTOTEC.

      </h2>
      <p> SISTEMA REPELENTE EN FACHADA PLANTA INDUSRIAL AUTOTEC.</p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample8" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/autotec1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/autotec2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/autotec3.png" alt="Proyecto 3">
          </div>

      
        </div>
        <a class="carousel-control-prev" href="#carouselExample8" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample8" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>

  </div>




  
<!-- /////////////CARRUSEL 9  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8">
      <!-- Descripción del tercer proyecto -->
      <h2>IMPERMEABILIZACION . 

      </h2>
      <p>IMPERMEABILIZACION MUROS VERDES.      </p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample9" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/muro1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/muro2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/muro3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/muro4.png" alt="Proyecto 3">
          </div>
      
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample9" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample9" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>

  </div>




<!-- /////////////CARRUSEL 10  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
  <div class="col-md-8 order-md-2">

      <!-- Descripción del tercer proyecto -->
      <h2> CAMPIÑA CUERNAVACA MORELOS


      </h2>
      <p> DESARROLLO HABITACIONAL LA CAMPIÑA CUERNAVACA MORELOS      .</p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample10" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/campina1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/campina2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/campina3.png" alt="Proyecto 3">
          </div>

      
        </div>
        <a class="carousel-control-prev" href="#carouselExample10" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample10" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>

  </div>



<!-- /////////////CARRUSEL 11  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8">
      <!-- Descripción del tercer proyecto -->
      <h2> CAMPO VERDE. 

      </h2>
      <p>DESARROLLO HABITACIONAL CAMPO VERDE CUERNAVACA MORELOS      .      </p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample11" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/verde1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/verde2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/verde3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/verde4.png" alt="Proyecto 3">
          </div>
            <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/verde5.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/verde6.png" alt="Proyecto 3">
          </div>

      
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample11" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample11" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>

  </div>





  
<!-- /////////////CARRUSEL 12  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
  <div class="col-md-8 order-md-2">

      <!-- Descripción del tercer proyecto -->
      <h2>PLAZA INN BLUE- INSURGENTES



      </h2>
      <p> PLAZA INN BLUE- INSURGENTES
      .</p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample12" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/inn1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/inn2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/inn3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/inn4.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/inn5.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/inn6.png" alt="Proyecto 3">
          </div>

      
        </div>
        <a class="carousel-control-prev" href="#carouselExample12" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample12" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </div>





  

<!-- /////////////CARRUSEL 13  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8">
      <!-- Descripción del tercer proyecto -->
      <h2> PLAZA DE LA TECNOLOGÍA AGUASCALIENTES. 

      </h2>
      <p>REHABILITADO Y APLICACIÓN DE SISTEMA POLIUREPARK EN ESTACIONAMIENTO DE PLAZA DE LA TECNOLOGÍA AGUASCALIENTES.      </p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample13" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/tecno1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/tecno2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/tecno3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/tecno4.png" alt="Proyecto 3">
          </div>
            <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/tecno5.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/tecno6.png" alt="Proyecto 3">
          </div>

      
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample13" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample13" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </div>





  <!-- /////////////CARRUSEL 14  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
  <div class="col-md-8 order-md-2">

      <!-- Descripción del tercer proyecto -->
      <h2>PLAZA DE LA TECNOLOGÍA AGUASCALIENTES



      </h2>
      <p>REHABILITADO Y APLICACIÓN DE SISTEMA POLIUREPARK EN ESTACIONAMIENTO DE PLAZA DE LA TECNOLOGÍA AGUASCALIENTES.</p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample14" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/aguas1.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/aguas2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/aguas3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/aguas4.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/aguas5.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/aguas6.png" alt="Proyecto 3">
          </div>

      
        </div>
        <a class="carousel-control-prev" href="#carouselExample14" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample14" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </div>




  <!-- /////////////CARRUSEL 15  ///////////////////// -->
 

  <!-- CUARTO CARRUSEK///// -->
  <div class="row mb-4" id="container-carrusel">
    <div class="col-md-8">
      <!-- Descripción del tercer proyecto -->
      <h2> PLAZA DE LA MUJER EN TOLUCA. 

      </h2>
      <p>APLICACIÓN DE SISTEMA POLIUREPARK EN ESTACIONAMIENTO DE PLAZA DE LA MUJER EN TOLUCA.</p>
    </div>
    <div class="col-md-4">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample15" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid gallery-img" src="img/mujer6.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/mujer2.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/mujer3.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/mujer4.png" alt="Proyecto 3">
          </div>
            <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/mujer5.png" alt="Proyecto 3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid gallery-img" src="img/mujer6.png" alt="Proyecto 3">
          </div>

      
      
        </div>
        <a class="carousel-control-prev" href="#carouselExample15" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample15" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </div>


</div>
</div>
<!-- jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php 
require("footer.php");
?>
</body>
</html>
