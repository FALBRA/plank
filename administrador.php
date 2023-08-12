<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>plankST</title>

    <link href="img/logo.png" rel="icon" />
    <link href="css/style-administrador.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cc6355aea6.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="header-administrator">
        <div class="conteiner-header-administrador">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="bienvenido-administrador">
                <h1>Bienvenido *nombre completo administrador*</h1>
            </div>
        </div>
    </section>
    <section class="tabla-clientes-servicios">
        <div class="container-tabla-clientes-servicios">
            <div class="encabezado">
                <h1>TABLA DE CLIENTE POR CADA SERVICIO</h1>
            </div>
            <div class="tabla">
                <div class="encabezado-tabla">
                    <a href="">Reparación</a>
                    <a href="">Instalación</a>
                    <a href="">Desarrollo Web</a>
                    <a href="">Arduino</a>
                    <a href="">Casas Inteligentes</a>
                    <a href="">Consultoría</a>
                    <a href=""> IA's</a>
                </div>
                <div class="cuerpo-tabla">
                    <?php
                        include("tablas-servicios-administrador/tabla-desarrolloweb.php");
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>