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
</head>

<body>
    <section class="header">
        <div class="logo" onclick="window.location.href = 'index.php'">
            <img src="img/logo.png" alt="" srcset="">
        </div>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-menu">&#9776;</label>
        <nav class="opciones-header">
            <ul>
                <li><a href="todos-servicios.php" class="servicios" id="serviciosLink">SERVICIOS</a></li>
                <li><a href="nosotros.php" class="nosotros" id="nosotros">NOSOTROS</a></li>
                <li><a href="noticias.php" class="noticias" id="serviciosNoticias">NOTICIAS</a></li>

                <li><a id="login" href="#" class="usuario"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>

    </section>
    <script src="js/headerjs.js"></script>

    <?php
    include("modal-login.php");
    ?>