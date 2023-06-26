<?php
include("header.php");
?>
<link rel="stylesheet" href="css/style-noticias.css">
<div class="arriba">
    <h1>Plank Noticias</h1>
    <p>Descrubre noticias sobre tecnologia</p>
    <hr class="linea_separacion">
</div>

<div class="container">
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

<?php
include("footer.php");
?>