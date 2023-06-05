<?php
include("header.php");
?>
<link href="css/style-todos-servicios.css" rel="stylesheet" />

<section class="todos-servicios">
    <div class="buscador">
        <div class="servicios-plak">
            <h1>Servicios de PLANK</h1>
            <P>Que la tecnologìa no sea un problema</P>
            <hr class="linea_separacion">
        </div>
        <div class="filtro-botones">
            <a href="">Todos</a>
            <a href="">Reparación</a>
            <a href="">Instalación</a>
            <a href="">Desarrollo Web</a>
            <a href="">Casas Inteligentes</a>
            <a href="">Arduino</a>
            <a href="">Consejerìa</a>
            <a href="">IA's</a>
        </div>
        <div class="filtro-barra">
            <input type="text" id="busqueda" placeholder="Buscar etiquetas...">
        </div>
    </div>
</section>

<?php
include("footer.php");
?>