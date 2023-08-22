<?php

$sesionActiva = isset($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>plankST</title>

    <link href="img/logo.png" rel="icon" />
    <link href="css/style.css" rel="stylesheet" />

    <link href="css/stylenews.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cc6355aea6.js" crossorigin="anonymous"></script>
</head>

<style>
    .btn-logout {
        display: <?php echo $sesionActiva ? 'block' : 'none'; ?> !important;
    }

    .btn-login {
        display: <?php echo $sesionActiva ? 'none' : 'block'; ?> !important;
    }

    .btn-user {
        display: <?php echo $sesionActiva ? 'block' : 'none'; ?> !important;

    }
</style>

<body>
    <section class="header">
        <div class="logo" onclick="window.location.href = 'index.php'">
            <img src="img/logo.png" alt="" srcset="">
        </div>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-menu" id="menu-label"><i class="fa-solid fa-align-justify"></i></label>
        <nav class="opciones-header">
            <ul>
                <li><a href="todos-servicios.php" class="servicios" id="serviciosLink">SERVICIOS</a></li>
                <li><a href="nosotros.php" class="nosotros" id="nosotros">NOSOTROS</a></li>
                <li><a href="noticias.php" class="noticias" id="serviciosNoticias">NOTICIAS</a></li>

                <li class="btn-login"><a id="login" href="#" class="usuario"><i class="fa-solid fa-user"></i></a></li>
                <li class="btn-user"><a id="" href="cliente.php" class="usuario"><i class="fa-solid fa-user"></i>&nbsp;CLIENTE</a></li>

                <li class="btn-logout">
                    <form class="form-modal-login" action="php/inicio-sesion.php" method="POST">
                        <button name="logout" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
                    </form>
                </li>

            </ul>
        </nav>

    </section>
    <script src="js/headerjs.js"></script>

    <?php
    include("modal-login.php");
    ?>