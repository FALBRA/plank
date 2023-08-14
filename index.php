<?php

session_start();
require 'php/conexion.php';
$user = $_SESSION['user'];
if (!isset($user)) {
    header("location: ../index.php");
}
?>
<?php
include("header.php");
?>
<section class="index">
    <div class="principal">
        <input type="checkbox" id="btn-rs">
        <label for="btn-rs" class="icon-rs" id="menu-label-rs"><i class="fa-solid fa-chart-bar"></i></label>
        <div class="principal_redes">
            <ul>
                <li><a href="" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="" class="email"><i class="fa-regular fa-envelope"></i></a></li>
                <li><a href="" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="principal_titulo">
            <h1>Soluciones tecnológicas</h1>
            <h2>a su alcance</h2>
            <a href="todos-servicios.php">Descubre nuestros servicios</a>
        </div>
        <div class="principal_imagen">
            <img src="img/R.png" alt="" srcset="">

        </div>


    </div>
    <div class="servicios_populares">
        <h1>Los servicios mas populares</h1>
        <div class="servicios_populares-servicios">

            <div class="servicio_popular">
                <div class="servicio_popular-imagen">
                    <img src="img/servicios/reparacion/servicioReparacion.jpg" alt="" srcset="">
                </div>
                <div class="servicio_popular-nombre">
                    <h1>Reparación</h1>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                </div>
                <div class="servicio_popular-descripcion">
                    <h2>Reparación de dispositivos electrónicos como:</h2>
                    <ul>
                        <li>Laptops</li>
                        <li>Computadoras</li>
                        <li>etc.</li>
                    </ul>
                </div>
                <div class="servicio_popular-opciones">
                    <div class="icono">
                        <img src="img/logo.png" alt="" srcset="">
                    </div>
                    <div class="informacion">
                        <a class="contratar" href="servicios/reparacion.php#contratar">Contratar</a>
                        <a class="info" href="servicios/reparacion.php">Más información</a>
                    </div>
                </div>
            </div>
            <div class="servicio_popular">
                <div class="servicio_popular-imagen">
                    <img src="img/servicios/instalacion/servicioInstalacion.jpg" alt="" srcset="">
                </div>
                <div class="servicio_popular-nombre">
                    <h1>Instalación</h1>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                </div>
                <div class="servicio_popular-descripcion">
                    <h2>Instalación de programas y dispositivos electrónicos como:</h2>
                    <ul>
                        <li>Repetidores</li>
                        <li>Cámaras</li>
                        <li>etc.</li>
                    </ul>
                </div>
                <div class="servicio_popular-opciones">
                    <div class="icono">
                        <img src="img/logo.png" alt="" srcset="">
                    </div>
                    <div class="informacion">
                        <a class="contratar" href="servicios/instalacion.php#contratar">Contratar</a>
                        <a class="info" href="servicios/instalacion.php">Más información</a>
                    </div>
                </div>
            </div>
            <div class="servicio_popular">
                <div class="servicio_popular-imagen">
                    <img src="img/servicios/desarrolloWeb/servicioDesarrolloWeb.jpg" alt="" srcset="">
                </div>
                <div class="servicio_popular-nombre">
                    <h1>Desarrollo Web</h1>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                </div>
                <div class="servicio_popular-descripcion">
                    <h2>Diseño, desarrollo e implementación de paginas web en:</h2>
                    <ul>
                        <li>PHP</li>
                        <li>Java Script</li>
                        <li>etc.</li>
                    </ul>
                </div>
                <div class="servicio_popular-opciones">
                    <div class="icono">
                        <img src="img/logo.png" alt="" srcset="">
                    </div>
                    <div class="informacion">
                        <a class="contratar" href="servicios/desarrollo-web.php#contratar">Contratar</a>
                        <a class="info" href="servicios/desarrollo-web.php">Más información</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <hr class="linea_separacion">
    <div class="bienvenidos">
        <div class="bienvenidos_titulo">
            <h1>BIENVENIDOS</h1>

        </div>

        <div class="bienvenidos_cuerpo">
            <p>En PLANK nos gusta brindar soluciones tecnológicas que resuelvan los problemas de nuestros valiosos
                clientes. No importa quién seas, joven o mayor, estudiante o empresario, estamos aquí para ayudarte
                en todas tus necesidades tecnológicas, desde simples instalaciones hasta proyectos complejos.
            </p>
            <p class="oculto">Nuestro equipo está dedicado a ofrecerte un servicio profesional y personalizado. Si tienes
                dificultades con tus dispositivos, no te preocupes, estamos aquí para ayudarte. Nuestros técnicos
                altamente capacitados están listos para realizar instalaciones y reparaciones eficientes y
                confiables, ya sea en tu computadora, smartphone o configuración de red en casa.
            </p>
            <p class="oculto">Pero no nos detenemos ahí. También nos ofrecemos servicios de desarrollo web que se adapten a tus
                necesidades. Trabajaremos contigo para crear una presencia en línea que refleje tu visión y
                objetivos, de una manera accesible y amigable.
            </p>
            <p class="oculto">Y si sueñas con tener una casa inteligente, nosotros te acompañaremos en cada paso. Desde sistemas de
                seguridad como cámaras hasta iluminación automatizada y gestión energética eficiente, te brindaremos
                soluciones sencillas y asequibles que te harán sentir cómodo y seguro en tu hogar.
            </p>
            <p class="oculto">En PLANK, creemos que la tecnología debería ser fácil de entender y utilizar para todos.
            </p>
            <button class="le-mas" onclick="mostrarMas()">Leer más</button>
            <script src="js/bienvenidos.js"></script>
        </div>
    </div>
</section>
<?php
include("footer.php");
?>