<?php
include("header.php");
?>
<link href="css/style-cliente.css" rel="stylesheet" />
<section class="encabezado-cliente">
    <div class="encabezado-cleinte-container">
        <div class="perfil">
            <div class="foto">
                <img src="img/white.png" alt="white">
            </div>
            <div class="nickname">
                <h1>nickname</h1>
            </div>
        </div>
        <div class="actividad-option">
            <i id="icono-cliente-option" class="fa-solid fa-ellipsis-vertical"></i>
            <div class="actividad">
                <h2>TU ACTIVIDAD</h2>
            </div>
            <div class="option">
                <h2>OPCIONES</h2>
            </div>
        </div>
    </div>
</section>

<section class="vista-servicios-cliente">
    <div class="container-vista-servicios-cliente">
        <div class="selector-servicio-cliente">
            <div class="reparacion">
                <h2>REPARACION</h2>
            </div>
            <div class="insyalacion">
                <h2>INSTALACION</h2>
            </div>
            <div class="desarrollo-web">
                <h2>DESARROLLO WEB</h2>
            </div>
        </div>
        <div class="contenido-servicio-cliente">
            <div class="contenido-reparacion">
                <div class="reparacion-actual">
                    <div class="no-reparacion-actual">
                        <h1>No hay reparacion actual</h1>
                    </div>
                    <div class="si-reparacion-actual">
                        <h1>Reparacion actual</h1>
                    </div>
                </div>
                <div class="cantidad-reparaciones">
                    <h1>Tu cantidad de reparaciones: 0</h1>
                </div>
                <div class="cantidad-comentarios-disponibles">
                    <h1>Tu cantidad de comentarios disponibles: 0</h1>
                </div>
                <div class="comentarios-reparacion">
                    <h1>Tus comentarios +</h1>

                </div>
            </div>

            <div class="contenido-instalacion">

            </div>

            <div class="contenido-desarrollo-web">

            </div>
        </div>
    </div>
</section>

<section class="opciones-content">
    <div class="container-opciones-content">
        <div class="titulo-opciones">
            <h2>contenido opciones</h2>
        </div>
    </div>
</section>

<script src="js/cliente.js"></script>

<?php
include("footer.php");
?>