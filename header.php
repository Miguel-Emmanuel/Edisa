<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSTRUCTORA-EDISA</title>
    <link rel="icon" href="img/logo-canva.png" type="image/png">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <header >
        
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-white">
         
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon">||</span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#inicio">Inicio</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#servicios">Servicios</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#proyectos">Proyectos</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#nosotros">Nosotros</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#contacto">Contacto</a>
                 </li>
             </ul>
         </div>
     </nav>
        <div class="logo">
            <img src="img/logo.png" alt="logo-edisa">
            <h1> PROYECTOS Y CONSTRUCCIÓN EDISA S.A DE C.V</h1>
        </div>

    </header>
    <script>
    $(document).ready(function(){
        $(".navbar-nav .nav-link").on("click", function(){
            $(".navbar-collapse").collapse("hide");
        });
    });
</script>