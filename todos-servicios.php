<?php
include("header.php");
?>
<link href="css/style-todos-servicios.css" rel="stylesheet" />

<section class="filtro-buscador">
    <div class="buscador">
        <div class="servicios-plak">
            <h1>Servicios de PLANK</h1>
            <P>Que la tecnologìa no sea un problema</P>
            <hr class="linea_separacion">
        </div>
        <div class="filtro-botones">
            <a href="#" onclick="toggleSelected(event)">Todos</a>
            <a href="#" onclick="toggleSelected(event)">Reparación</a>
            <a href="#" onclick="toggleSelected(event)">Instalación</a>
            <a href="#" onclick="toggleSelected(event)">Desarrollo Web</a>
            <a href="#" onclick="toggleSelected(event)">Casas Inteligentes</a>
            <a href="#" onclick="toggleSelected(event)">Arduino</a>
            <a href="#" onclick="toggleSelected(event)">Consejería</a>
            <a href="#" onclick="toggleSelected(event)">IA's</a>
        </div>
        <div class="filtro-barra">
            <input type="text" id="busqueda" placeholder="Buscar servicio...">
        </div>
    </div>
</section>
<section class="todos-servicios" id="lista-servicios">

    <div class="servicio">
        <div class="servicio-imagen">
            <img src="img/servicios/servicio.jpg" alt="" srcset="">
        </div>
        <div class="servicio-nombre">
            <h1>Reparación</h1>
            <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
        </div>
        <div class="servicio-descripcion">
            <h2>Reparación de dispositivos electrónicos como:</h2>
            <ul>
                <li>Laptops</li>
                <li>Computadoras</li>
                <li>etc.</li>
            </ul>
        </div>
        <div class="servicio-opciones">
            <div class="icono">
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <div class="informacion">
                <a href="">Contratar</a>
                <a href="servicios/reparacion.php">Más información</a>
            </div>
        </div>
    </div>

    <div class="servicio">
        <div class="servicio-imagen">
            <img src="img/servicios/servicio.jpg" alt="" srcset="">
        </div>
        <div class="servicio-nombre">
            <h1>Instalación</h1>
            <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
        </div>
        <div class="servicio-descripcion">
            <h2>Instalación de programas y dispositivos electrónicos como:</h2>
            <ul>
                <li>Repetidores</li>
                <li>Cámaras</li>
                <li>etc.</li>
            </ul>
        </div>
        <div class="servicio-opciones">
            <div class="icono">
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <div class="informacion">
                <a href="">Contratar</a>
                <a href="">Más información</a>
            </div>
        </div>
    </div>

    <div class="servicio">
        <div class="servicio-imagen">
            <img src="img/servicios/servicio.jpg" alt="" srcset="">
        </div>
        <div class="servicio-nombre">
            <h1>Desarrollo Web</h1>
            <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
        </div>
        <div class="servicio-descripcion">
            <h2>Diseño, desarrollo e implementación de paginas web en:</h2>
            <ul>
                <li>PHP</li>
                <li>Java Script</li>
                <li>etc.</li>
            </ul>
        </div>
        <div class="servicio-opciones">
            <div class="icono">
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <div class="informacion">
                <a href="">Contratar</a>
                <a href="">Más información</a>
            </div>
        </div>
    </div>



    <div class="servicio">
        <div class="servicio-imagen">
            <img src="img/servicios/servicio.jpg" alt="" srcset="">
        </div>
        <div class="servicio-nombre">
            <h1>Casas Inteligentes</h1>
            <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
        </div>
        <div class="servicio-descripcion">
            <h2>Convertimos casas normales en casas Inteligentes usando:</h2>
            <ul>
                <li>Mi Box</li>
                <li>Alexa</li>
                <li>etc.</li>
            </ul>
        </div>
        <div class="servicio-opciones">
            <div class="icono">
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <div class="informacion">
                <a href="">Contratar</a>
                <a href="">Más información</a>
            </div>
        </div>
    </div>

    <div class="servicio">
        <div class="servicio-imagen">
            <img src="img/servicios/servicio.jpg" alt="" srcset="">
        </div>
        <div class="servicio-nombre">
            <h1>Arduino</h1>
            <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
        </div>
        <div class="servicio-descripcion">
            <h2>Desarrollo de proyectos en Arduino como:</h2>
            <ul>
                <li>Hidropónico </li>
                <li>Circuito led</li>
                <li>etc.</li>
            </ul>
        </div>
        <div class="servicio-opciones">
            <div class="icono">
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <div class="informacion">
                <a href="">Contratar</a>
                <a href="">Más información</a>
            </div>
        </div>
    </div>

    <div class="servicio">
        <div class="servicio-imagen">
            <img src="img/servicios/servicio.jpg" alt="" srcset="">
        </div>
        <div class="servicio-nombre">
            <h1>Consejería</h1>
            <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
        </div>
        <div class="servicio-descripcion">
            <h2>Te brindamos consejos personalizados como:</h2>
            <ul>
                <li>Programas concretos</li>
                <li>Programación </li>
                <li>etc.</li>
            </ul>
        </div>
        <div class="servicio-opciones">
            <div class="icono">
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <div class="informacion">
                <a href="">Contratar</a>
                <a href="">Más información</a>
            </div>
        </div>
    </div>



    <div class="servicio">
        <div class="servicio-imagen">
            <img src="img/servicios/servicio.jpg" alt="" srcset="">
        </div>
        <div class="servicio-nombre">
            <h1>IA's</h1>
            <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
        </div>
        <div class="servicio-descripcion">
            <h2>Te ayudamos usando herramientas de IA como:</h2>
            <ul>
                <li>ChatGPT</li>
                <li>Leonardo AI</li>
                <li>etc.</li>
            </ul>
        </div>
        <div class="servicio-opciones">
            <div class="icono">
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <div class="informacion">
                <a href="">Contratar</a>
                <a href="">Más información</a>
            </div>
        </div>
    </div>

</section>
<script src="js/todos-servicios.js"></script>
<?php
include("footer.php");
?>