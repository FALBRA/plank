<?php
include("header.php");
?>
    <section class="index">
        <div class="principal">
            <div class="principal_redes">
                <a href="" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="" class="email"><i class="fa-regular fa-envelope"></i></a>
                <a href="" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="" class="twitter"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="principal_titulo">
                <h1>Entérate de la ultimas noticias</h1>
                <BR></BR>
                <a href="index.php"> HOME </a>
            </div>
            <div class="principal_imagen">
                <img src="img/R.png" alt="" srcset="">

            </div>

        </div>
        <div class="container">
        <h1>NOTICIAS MAS RECIENTES</h1>
        <header>
            <nav>
                <span class="cat" onclick="buscar('Tecnología')">Tecnología</span>
                <span class="cat" onclick="buscar('programación')">Programación</span>
                <span class="cat" onclick="buscar('economía')">Economía</span>
                <span class="cat" onclick="buscar('educación')">Educación</span>
            </nav>
            <div class="busqueda">
                <input type="text" placeholder="Qué desea buscar" id="busqueda">
                <button onclick="buscarTema()">Buscar</button>
            </div>
        </header>


        <div class="container-noticias">

        </div>
    </div>






        <hr class="linea_separación">
        <div class="bienvenidos">
            <div class="bienvenidos_titulo">
                <h1>BIENVENIDOS</h1>

            </div>

            <div class="bienvenidos_cuerpo">
                <p>En PLANK nos gusta brindar soluciones tecnológicas que resuelvan los problemas de nuestros valiosos
                    clientes. No importa quién seas, joven o mayor, estudiante o empresario, estamos aquí para ayudarte
                    en todas tus necesidades tecnológicas, desde simples instalaciones hasta proyectos complejos.</p>
                <p>Nuestro equipo de está dedicado a ofrecerte un servicio profesional y personalizado. Si tienes
                    dificultades con tus dispositivos, no te preocupes, estamos aquí para ayudarte. Nuestros técnicos
                    altamente capacitados están listos para realizar instalaciones y reparaciones eficientes y
                    confiables, ya sea en tu computadora, smartphone o configuración de red en casa.</p>
                <p>
                    Pero no nos detenemos ahí. También nos ofrecemos servicios de desarrollo web que se adapten a tus
                    necesidades. Trabajaremos contigo para crear una presencia en línea que refleje tu visión y
                    objetivos, de una manera accesible y amigable.
                </p>
                <p>Y si sueñas con tener una casa inteligente, nosotros te acompañaremos en cada paso. Desde sistemas de
                    seguridad como cámaras hasta iluminación automatizada y gestión energética eficiente, te brindaremos
                    soluciones sencillas y asequibles que te harán sentir cómodo y seguro en tu hogar.</p>
                <p>En PLANK, creemos que la tecnología debería ser fácil de entender y utilizar para todos. </p>
            </div>
        </div>
        <hr class="linea_separacion">

<?php
include("footer.php");
?>