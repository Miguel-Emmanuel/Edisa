

<script>



document.addEventListener('DOMContentLoaded', function() {
    var hash = window.location.hash;

    if (hash === '#modal_obra_civil') {
        modal_obra_civil('obra_civil/');
    } else if (hash === '#modal_exteriores') {
        modal_exteriores('exteriores/');
    } else if (hash === '#modal_carpintero') {
        modal_carpintero('carpintero/');
    }carpintero
});





function modal_obra_civil(dir) {
    var carouselId = 'carouselServicios'; // Identificador único para el carrusel de servicios

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Detalle de Obra civil',
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
                onOpen: function() {
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        }
    });
}


function modal_carpintero(dir) {
    var carouselId = 'carouselCarpintero'; // Identificador único para el carrusel de carpintero

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Detalle de Carpintería',
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
                onOpen: function() {
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        }
    });
}

function modal_impermeable(dir) {
    var carouselId = 'carouselimpermeable'; // Identificador único para el carrusel de carpintero

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Detalle de Impermeabilización',
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
                onOpen: function() {
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        }
    });
}




function modal_herreria(dir) {
    var carouselId = 'carouselherreria'; // Identificador único para el carrusel de carpintero

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Detalle de Herrería',
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
                onOpen: function() {
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        }
    });
}




function modal_exteriores(dir) {
    var carouselId = 'carouselexteriores'; // Identificador único para el carrusel de carpintero

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Detalle de Interiores y Exteriores',
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
                onOpen: function() {
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        }
    });
}






function modal_tablaroca(dir) {
    var carouselId = 'carouseltablaroca'; // Identificador único para el carrusel de carpintero

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Detalle de Tabla Roca',
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
                onOpen: function() {
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        }
    });
}
function modal_canceleria(dir) {
    var carouselId = 'carouselcanceleria'; // Identificador único para el carrusel de carpintero

    $.ajax({
        url: 'generar_carousel.php', // Script PHP para generar el contenido del carrusel
        method: 'POST',
        data: { dir: dir, carouselId: carouselId },
        success: function(response) {
            Swal.fire({
                title: 'Canceleria y aluminio',
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
                onOpen: function() {
                    // Inicializar el carrusel después de que se abra el modal
                    $('#' + carouselId).carousel();
                }
            });
        }
    });
}


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