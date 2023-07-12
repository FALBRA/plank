<?php
include("header-servicio.php");
?>
<link rel="stylesheet" href="../css/style-instalacion.css">
<section class="encabezado-reparacion">
    <div class="encabezado">
        <h1>Instalación</h1>
        <hr class="linea_separacion-reparacion">
        <p>Instalación confiable y a domicilio. "Conecta, protege y potencia tu mundo tecnológico con nuestras instalaciones"</p>
    </div>
    <div class="bot">
        <div class="bot-reparacion">
            <img src="../img/servicios/instalacion/botInstalacion.png" alt="">
        </div>
        <div class="descripcion-reparacion">
            <p>Ofrecemos servicios eficientes para satisfacer todas tus necesidades.</p>
            <p>Ya sea que requieras la instalación de programas, antivirus, cámaras de seguridad o repetidores de Wi-Fi, nuestro equipo está preparado para brindarte una solución integral.</p>
            <div class="emotes-reparacion">
                <div class="programas">
                    <i class="fa-solid fa-cogs"></i>
                    <p>Programas</p>
                </div>
                <div class="antivirus">
                    <i class="fa-solid fa-shield-virus"></i>
                    <p>Antivirus</p>
                </div>
                <div class="camara">
                    <i class="fa-solid fa-video"></i>
                    <p>Cámaras</p>
                </div>
                <div class="repetidores">
                    <i class="fa-solid fa-wifi"></i>
                    <p>Repetidores</p>
                </div>
                <div class="otro">
                    <i class="fa-solid fa-ellipsis-h"></i>
                    <p>Otros</p>
                </div>
            </div>
            <p>Instalación a domicilio o donde lo requieras.</p>
            <p>Aquí hay un vistazo a las instalaciones que ofrecemos:</p>
        </div>
    </div>
</section>
<section class="reparaciones-ofrecidas">
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Programas:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/instalacion/servicioInstalacion.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Instalación y configuración de programas que necesites, asegurándonos de que todo funcione correctamente.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Antivirus:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/instalacion/servicioInstalacion.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Instalación y configuración de programas antivirus que te protegerán contra amenazas cibernéticas.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Cámaras:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/instalacion/servicioInstalacion.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Instalación de cámaras, configuración y puesta en marcha, para que puedas monitorear y proteger tu entorno de manera efectiva.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Repetidores de WIFI:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/instalacion/servicioInstalacion.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Instalación y configuración de repetidores Wi-Fi que amplificarán y mejorarán la cobertura de tu red inalámbrica.</h2>
        </div>
    </div>
    <div class="reparaciones">
        <div class="reparacion-nombre">
            <h1>Otros:</h1>
        </div>
        <div class="reparacion-imagen">
            <img src="../img/servicios/instalacion/servicioInstalacion.jpg" alt="">
        </div>
        <div class="reparacion-descripcion">
            <h2>Nos encargamos de todas tus necesidades de instalación, asegurándonos de que todos los equipos y sistemas funcionen perfectamente.</h2>
        </div>
    </div>
</section>
<section class="importante-preguntas">
    <div class="importante">
        <h1>IMPORTANTE</h1>
        <p>El precio de la instalación varia dependiendo de:</p>
        <li>Complejidad de la instalación.</li>
        <li>Tamaño y alcance.</li>
        <li>Requerimientos personalizados.</li>
        <li>Costo de los materiales.</li>
        <li>Ubicación geográfica.</li>
    </div>
    <div class="preguntas">

    </div>
</section>
<section class="solicitud" id="contratar">
    <div class="container">
        <h2>Formulario de Instalación</h2>
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
                        <input type="text" id="direccion" name="direccion" placeholder=" Dirección del lugar donde realizar la instalación" required>
                    </div>
                    <div class="equipo-programa-instalar">
                        <div class="equipo-programa">
                            <input type="text" id="equipo" name="equipo" placeholder="Equipo o programa a instalar" required>
                        </div>
                        <div class="instalar">
                            <input type="text" id="marca_modelo" name="marca_modelo" placeholder="Marca y modelo" required>
                        </div>
                    </div>
                    <div class="descripcion">
                        <textarea id="problema" name="problema" rows="4" placeholder="Pequeña descripción " required></textarea>
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
<?php
include("footer-servicio.php");
?>