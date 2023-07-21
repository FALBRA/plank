<?php
    
    include 'conexion.php';

    $nombre_completo_cliente = $_POST['nombre-completo'];
    $celular_cliente = $_POST['celular'];
    $correo_cliente = $_POST['correo'];
    $nickname_cliente = $_POST['nickname'];
    $pass_cliente = $_POST['pass'];

    $query_registro_cliente = "INSERT INTO 
                                cliente(nombre_completo_cliente, celular_cliente, correo_cliente, pass_cliente, nickname_cliente, cantidad_reparacion, cantidad_instalacion, cantidad_desarrollo_web, fecha_registro, ID_plank)
                                VALUES('$nombre_completo_cliente', '$celular_cliente', '$correo_cliente', '$pass_cliente', '$nickname_cliente', 0, 0, 0, NOW(), 1)";
    
    $ejecutar_registro_cliente = mysqli_query($conexion, $query_registro_cliente); 

    if($ejecutar_registro_cliente){
        echo '
            <script>
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("intentelo de nuevo");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>