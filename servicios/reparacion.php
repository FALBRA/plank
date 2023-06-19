<?php
include("header-servicio.php");
?>
<link rel="stylesheet" href="../css/style-reparacion.css">
<section class="encabezado-reparacion">
    <div class="encabezado">
        <h1>Reparacion</h1>
        <hr class="linea_separacion-reparacion">
        <p>Reparación confiable y a domicilio de dispositivos tecnológicos. ¡Confíe en nosotros para restaurar su tecnología al máximo!</p>
    </div>
    <div class="bot">
        <div class="bot-reparacion">
            <img src="../img/servicios/reparacion/botReparacion.png" alt="">
        </div>
        <div class="descripcion-reparacion">
            <p>Entendemos la importancia de mantener tus dispositivos en óptimas condiciones y que tu comodidad son importantes. Es por eso que ofrecemos un servicio de reparación a domicilio. ¡estamos aquí para ayudarte!</p>
            <div class="emotes-reparacion">
                <div class="compu">
                    <i class="fa-solid fa-computer"></i>
                    <p>Computadoras</p>
                </div>
                <div class="lap">
                    <i class="fa-solid fa-laptop"></i>
                    <p>Laptops</p>
                </div>
                <div class="cel">
                    <i class="fa-solid fa-mobile-alt"></i>
                    <p>Celulares</p>
                </div>
                <div class="otro">
                    <i class="fa-solid fa-ellipsis-h"></i>
                    <p>Otros</p>
                </div>
            </div>
            <p>Reparamos desde los problemas más comunes hasta las situaciones más complejas.</p>
            <p>Aquí hay un vistazo a las reparaciones que ofrecemos:</p>
        </div>
    </div>
</section>
<section class="reparaciones-ofrecidas">
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Formateos:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/servicio.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Solucionamos problemas de rendimiento y errores frecuentes mediante un formateo seguro y completo.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Booteo:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/servicio.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Reparamos dispositivos que no se inician correctamente o se reinician constantemente, restaurando su funcionalidad normal.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Cambios de componentes:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/servicio.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Reemplazamos pantallas rotas, baterías agotadas y otros componentes defectuosos con piezas de alta calidad.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Mantenimiento de hardware:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/servicio.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Mantenemos tu hardware en óptimas condiciones para prevenir problemas mayores en el futuro.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Optimización de dispositivos:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/servicio.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Mejoramos la velocidad y eficiencia de tus dispositivos eliminando programas innecesarios y malware.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Otros:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/servicio.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Nuestro equipo repara desde los problemas más comunes hasta las situaciones más complejas, estamos preparados para ofrecerte soluciones eficientes y confiables.</h2>
        </div>
    </div>
</section>
<section class="importante-preguntas">
    <div class="importante">
        <h1>IMPORTANTE</h1>
        <p>El precio de la reparación varia dependiendo de:</p>
        <li>La ubicación del cliente.</li>
        <li>Complejidad del trabajo.</li>
        <li>Tipo de equipo a reparar.</li>
        <li>Material utilizado.</li>
    </div>
    <div class="preguntas">

    </div>
</section>
<section class="solicitud">
    <div class="container">
        <h2>Formulario de Reparación</h2>
        <form action="#" method="post" class="formulario">
            <div class="nombre-correo-celular">
                <div class="nombre">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre completo del cliente" required>
                </div>
                <div class="correo">
                    <input type="email" id="email" name="email" placeholder="Correo Electronico" required>
                </div>
                <div class="celular">
                    <input type="tel" id="celular" name="celular" placeholder="Número de Celular" required>
                </div>
            </div>
            <div class="map-rest">
                <div class="map">
                    <label for="map">Dirección en Google Maps:</label>
                    <div id="google-map"></div>
                </div>
                <div class="rest">
                    <div class="direccion">
                        <input type="text" id="direccion" name="direccion" placeholder="Dirección para recoger el equipo" required>
                    </div>
                    <div class="equipo-reparar">
                        <div class="equipo">
                            <input type="text" id="equipo" name="equipo" placeholder="Equipo a reparar" required>
                        </div>
                        <div class="reparar">
                            <input type="text" id="marca_modelo" name="marca_modelo" placeholder="Marca y modelo" required>
                        </div>
                    </div>
                    <div class="descripcion">
                        <textarea id="problema" name="problema" rows="4" placeholder="Descripción detallada del problema" required></textarea>
                    </div>
                </div>
            </div>
            <div class="combo-box-metodo-pago">
                <label for="metodo-pago">Método de Pago:</label>
                <select id="metodo-pago" name="metodo-pago" required>
                    <option value="">Seleccionar método de pago</option>
                    <option value="Tarjeta de Crédito">Pago en persona</option>
                    <option value="Transferencia Bancaria">Transferencia Bancaria</option>
                </select>
            </div>
            <div class="boton-enviar-formulario">
                <input type="submit" value="ENVIAR SOLICITUD DE SERVICIO">
            </div>
        </form>
    </div>
    <div class="recordar">
        <i class="fa-solid fa-exclamation-circle"></i>
        <p>En caso de cancelar el servicio no se le devolverá el adelanto, en caso de no reparar el equipo se le devolverá el dinero en su totalidad</p>
    </div>
</section>
<section class="comentarios">
    <h2>COMENTARIOS DE CLIENTES</h2>
    <div class="usuario">
        <div class="foto">
            <div class="circulo foto"><img src="../img/white.png" alt=""></div>
        </div>
        <div class="usuario-comentario">
            <div class="nombre-usuario">
                <p>nombre de cliente</p>
            </div>
            <div class="comentario">
                <p>comentario,comentario,comentario,comentario,comentario,comentario,comentario,comentario,</p>
            </div>
        </div>
    </div>
</section>
<script src="../js/reparacion.js"></script>
<?php
include("footer-servicio.php");
?>