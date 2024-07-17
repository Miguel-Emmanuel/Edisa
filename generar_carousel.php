<?php
$dir = $_POST['dir']; // Ruta a la carpeta que contiene las imágenes
$carouselId = $_POST['carouselId']; // Identificador único para el carrusel

// Verifica si el directorio existe
if (!is_dir($dir)) {
    echo '<div class="alert alert-danger">Error: El directorio no existe.</div>';
    exit();
}

// Verifica si el directorio es accesible
if (!is_readable($dir)) {
    echo '<div class="alert alert-danger">Error: El directorio no es accesible.</div>';
    exit();
}

// Obtiene las imágenes de la carpeta
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Verifica si se encontraron imágenes
if ($images === false || count($images) === 0) {
    echo '<div class="alert alert-danger">Error: No se encontraron imágenes en el directorio.</div>';
    exit();
}
$carouselItems = '';
foreach ($images as $index => $image) {
    $class = $index === 0 ? 'carousel-item active' : 'carousel-item';
    $carouselItems .= '<div class="' . $class . '">';
    $carouselItems .= '<img src="' . $image . '" class="d-block w-100 img-fluid" alt="Imagen ' . ($index + 1) . '">';
    $carouselItems .= '</div>';
}

// Imprime el contenido del carrusel
echo '
<div id="' . $carouselId . '" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        ' . $carouselItems . '
    </div>
    <a class="carousel-control-prev" href="#' . $carouselId . '" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#' . $carouselId . '" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>';

?>
