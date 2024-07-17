<?php
require("header.php");

?>  

<section id="nosotros" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Sobre Nosotros</h2>
        <div class="about-container">
            <div class="about-card mb-4">
                <h3>Misión</h3>
                <img src="img/acrilico.png" alt="Misión" class="img-fluid mb-3">
                <p>Construir obras basadas en la calidad y el servicio responsable a nuestros clientes , creciendo en forma rentable y segura ofreciendo distintas modalidades para construir , asesoría en diseños de planos y materiales de construcción obteniendo asi el reconocimiento en nuestro sector mercado con clientes satisfechos.</p>
            </div>
            <div class="about-card mb-4">
                <h3>Visión</h3>
                <img src="img/tejado.jpeg" alt="Visión" class="img-fluid mb-3">
                <p>Ser una empresa constructora reconocida por su liderazgo, confiabilidad, calidad y servicio al cliente, y por su presencia en el mercado local y nacional.</p>
            </div>
            <div class="about-card mb-4">
                <h3>Valores</h3>
                <ul>
                    <li><strong>Innovación:</strong> Impulsamos el desarrollo de nuevas tecnologías y promovemos la mejora continua.</li>
                    <li><strong>Compromiso:</strong> Con el desarrollo personal y profesional de nuestros empleados, fomentando un ambiente de trabajo respetuoso y el trabajo en equipo.</li>
                    <li><strong>Calidad:</strong> Implementada en la entrega del proyecto, superando las expectativas de nuestros clientes.</li>
                    <li><strong>Servicio:</strong> Nos centramos en las necesidades del cliente, cumpliendo con las responsabilidades asignadas con la mayor satisfacción y ofreciendo una atención individualizada a cada cliente.</li>
                </ul>
            </div>
            <!-- <div class="about-card mb-4">
                <h3>Historia de la Empresa</h3>
                <p>Nuestra empresa fue fundada en [año], inicialmente dedicada a [actividad principal]. Desde entonces, hemos crecido y nos hemos consolidado como líderes en el sector de la construcción en nuestra región.</p>
            </div> -->
            <div class="about-card mb-4">
                <h3>Equipo Directivo</h3>
                <img src="img/equipo.png" alt="organigrama" class="img-fluid mb-3">

                <p>Nuestro equipo directivo está formado por profesionales con amplia experiencia en la industria de la construcción. Conoce a nuestro equipo y sus logros:</p>
                <!-- Aquí podrías añadir fotos y perfiles breves del equipo directivo -->
            </div>
            <div class="about-card mb-4">
                <button class="btn" onclick="window.location.href='proyectos_destacados.php'">
                <h3>Proyectos Destacados</h3>

                <!-- <a href="proyectos_destacados.php" class="no-style"> -->
                <p>Hemos completado una amplia gama de proyectos, desde residenciales hasta comerciales e industriales. Destacamos por nuestra capacidad para llevar a cabo proyectos complejos y de alto perfil.</p>
                <!-- Aquí podrías añadir imágenes miniaturas de algunos proyectos destacados -->
            </div>
        </button>
            <div class="about-card mb-4">
                <h3>Certificaciones y Reconocimientos</h3>
                <p>Nuestra empresa cuenta con algunas certificaciones que garantizan nuestra calidad y compromiso con el medio ambiente y la seguridad en el trabajo. Estas incluyen:
                    </p>
                    <li>Certificado empresa mexiquense </li>
<li>Registro estatal de contribuyentes (REC)</li>
<li>Certificado de cámara de la industria mexicana de la construcción.</li>
 <!-- Además, hemos sido reconocidos por <strong> REPSE</strong>. -->
  <li>Registro REPSE: Cumplimiento laboral y transparencia en subcontratación de servicios especializados y obras especializadas en México.</li>
                <!-- Aquí podrías añadir logotipos de las certificaciones y mencionar los reconocimientos recibidos -->
            </div>
         
          
            <div class="about-card mb-4" onclick="modal_galeria('img/')">
                <h3>Galería de Imágenes</h3> 
                <p>Explora nuestras instalaciones, nuestro equipo en acción y algunos momentos destacados de eventos de la empresa:</p>
                <!-- Aquí podrías añadir una galería de imágenes relevantes -->
            </div>
        </div>
    </div>
</section>
<?php
require("modales_servicios.js");
require("footer.php");
?>
