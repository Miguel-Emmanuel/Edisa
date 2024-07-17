
<script>
function modal_galeria(dir) {
    var carouselId = 'carouselGaleria'; // Identificador único para el carrusel de servicios

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Galeria de Imagenes',
                html: response, // Contenido generado por PHP
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                cancelButtonText: 'Cerrar',
                width: '80%',
                padding: '1rem',
                background: '#fff',
                backdrop: true,
                allowOutsideClick: false,
                allowEscapeKey: true,
                didOpen: function() { // Usar didOpen en lugar de onOpen
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        },
        error: function(xhr, status, error) {
            console.error('Error en la solicitud AJAX:', error);
            Swal.fire({
                title: 'Error',
                text: 'Hubo un problema al cargar la galería de imágenes.',
                icon: 'error',
                confirmButtonText: 'Cerrar'
            });
        }
    });
}
</script>