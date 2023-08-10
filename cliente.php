<?php

session_start();
require 'php/conexion.php';
$user = $_SESSION['user'];
if (!isset($user)) {
    header("location: ../index.php");
}

$usuario = "SELECT * FROM cliente WHERE ID_cliente='$user'";
$query_usuario = mysqli_query($conexion, $usuario);

$comentario_reparacion = "SELECT * FROM comentario_reparacion WHERE ID_cliente='$user'";
$query_comentario_reparacion = mysqli_query($conexion, $usuario);

$comentario_desarrollo_web = "SELECT * FROM comentario_desarrollo_web WHERE ID_cliente='$user'";
$query_comentario_dw = mysqli_query($conexion, $usuario);

$comentario_instalacion = "SELECT * FROM comentario_instalacion WHERE ID_cliente='$user'";
$query_comentario_instalacion = mysqli_query($conexion, $usuario);

if (mysqli_num_rows($query_usuario) > 0) {
    $usuario = mysqli_fetch_array($query_usuario);
}


include("header.php");
?>
<link href="css/style-cliente.css" rel="stylesheet" />
<section class="encabezado-cliente">
    <div class="encabezado-cleinte-container">
        <div class="perfil">
            <div class="foto">
                <img src="img/white.png" alt="white">
                <form action="foto-perfil.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="imagen" accept="image/*">
                    <button type="submit" name="subir">Subir Imagen</button>
                </form>
            </div>
            <div class="nickname">

                <h1> <?php echo $usuario['nickname_cliente'] ?></h1>
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
            <div class="reparacion" data-active="false" onclick="activarDiv(this), mostrarContenido('reparacion')">
                <h2>REPARACION</h2>
            </div>
            <div class="instalacion" data-active="false" onclick="activarDiv(this), mostrarContenido('instalacion')">
                <h2>INSTALACION</h2>
            </div>
            <div class="desarrollo-web" data-active="false" onclick="activarDiv(this), mostrarContenido('desarrollo-web')">
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
                        <div class="estado-reparacion">
                            <div class="etapa cero">
                                <p>0%</p>
                                <i class="fa-solid fa-question"></i>
                                <p class="opa">solicitud enviada</p>
                            </div>
                            <div class="etapa veinte">
                                <p>20%</p>
                                <i class="fa-solid fa-question"></i>
                                <p class="opa">reparación iniciada</p>
                            </div>
                            <div class="etapa cuarenta">
                                <p>40%</p>
                                <i class="fa-solid fa-question"></i>
                                <p class="opa">reparación en proceso</p>
                            </div>
                            <div class="etapa sesenta">
                                <p>60%</p>
                                <i class="fa-solid fa-question"></i>
                                <p class="opa">reparación finalizada</p>
                            </div>
                            <div class="etapa ochenta">
                                <p>80%</p>
                                <i class="fa-solid fa-question"></i>
                                <p class="opa">equipo en camino</p>
                            </div>
                            <div class="etapa cien">
                                <p>100%</p>
                                <i class="fa-solid fa-question"></i>
                                <p class="opa">entregado</p>
                            </div>
                        </div>
                        <div class="linea"></div>
                    </div>
                </div>
                <div class="cantidad-reparaciones">
                    <h1>Tu cantidad de reparaciones: <?php echo $usuario['cantidad_reparacion'] ?></h1>
                </div>
                <div class="cantidad-comentarios-disponibles-reparacion">
                    <h1>Tu cantidad de comentarios disponibles: </h1>
                </div>
                <div class="comentarios-reparacion">
                    <h1>Tus comentarios:</h1>
                    <form action="" method="" class="formulario-escribir-comentaio">
                        <div class="escribir-comentario">
                            <textarea type="textarea" id="comentario-cliente" name="comentario-cliente" placeholder="comentario" required></textarea>
                        </div>
                        <div class="boton-enviar-comentario">
                            <input type="submit" value="Comentar">
                        </div>
                    </form>
                    <form action="" method="" class="ver-editar-eliminar-comentario">
                        <div class="vista-comentario">
                            <textarea id="vista-comentario-cliente" name="vista-comentario-cliente" placeholder="comentario" required></textarea>
                        </div>
                        <div class="editar-eliminar-fecha-comentario">
                            <p>Fecha: 00/00/0000</p>
                            <div class="edir-elim">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="contenido-instalacion">
                <div class="cantidad-instalaciones">
                    <h1>Tu cantidad de instalaciones: <?php echo $usuario['cantidad_instalacion'] ?></h1>
                </div>
                <div class="cantidad-comentarios-disponibles-instalacion">
                    <h1>Tu cantidad de comentarios disponibles: 0</h1>
                </div>
                <div class="comentarios-instalacion">
                    <h1>Tus comentarios:</h1>
                    <form action="" method="" class="formulario-escribir-comentaio">
                        <div class="escribir-comentario">
                            <textarea type="textarea" id="comentario-cliente" name="comentario-cliente" placeholder="comentario" required></textarea>
                        </div>
                        <div class="boton-enviar-comentario">
                            <input type="submit" value="Comentar">
                        </div>
                    </form>
                    <form action="" method="" class="ver-editar-eliminar-comentario">
                        <div class="vista-comentario">
                            <textarea id="vista-comentario-cliente" name="vista-comentario-cliente" placeholder="comentario" required></textarea>
                        </div>
                        <div class="editar-eliminar-fecha-comentario">
                            <p>Fecha: 00/00/0000</p>
                            <div class="edir-elim">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="contenido-desarrollo-web">
                <div class="cantidad-desarrollo-web">
                    <h1>Tu cantidad de desarrollo web: 0</h1>
                </div>
                <div class="cantidad-comentarios-disponibles-desarrollo-web">
                    <h1>Tu cantidad de comentarios disponibles: 0</h1>
                </div>
                <div class="comentarios-desarrollo-web">
                    <h1>Tus comentarios:</h1>
                    <form action="" method="" class="formulario-escribir-comentaio">
                        <div class="escribir-comentario">
                            <textarea type="textarea" id="comentario-cliente" name="comentario-cliente" placeholder="comentario" required></textarea>
                        </div>
                        <div class="boton-enviar-comentario">
                            <input type="submit" value="Comentar">
                        </div>
                    </form>
                    <form action="" method="" class="ver-editar-eliminar-comentario">
                        <div class="vista-comentario">
                            <textarea id="vista-comentario-cliente" name="vista-comentario-cliente" placeholder="comentario" required></textarea>
                        </div>
                        <div class="editar-eliminar-fecha-comentario">
                            <p>Fecha: 00/00/0000</p>
                            <div class="edir-elim">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                    </form>
                </div>
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