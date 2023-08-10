<?php

include 'conexion.php';

$nombre_completo_cliente = $_POST['nombre-completo'];
$celular_cliente = $_POST['celular'];
$correo_cliente = $_POST['correo'];
$nickname_cliente = $_POST['nickname'];
$pass_cliente = $_POST['pass'];

// start verificar
$query_verificar_existencia = "SELECT celular_cliente, correo_cliente, nickname_cliente FROM cliente 
                                   WHERE celular_cliente = '$celular_cliente' 
                                   OR correo_cliente = '$correo_cliente' 
                                   OR nickname_cliente = '$nickname_cliente'";

$resultado_verificacion = mysqli_query($conexion, $query_verificar_existencia);
$num_rows = mysqli_num_rows($resultado_verificacion);

if ($num_rows > 0) {
    $repetidos = array();

    // Recorremos los registros repetidos para identificar qué valores están repetidos
    while ($row = mysqli_fetch_assoc($resultado_verificacion)) {
        if ($row['celular_cliente'] === $celular_cliente) {
            $repetidos[] = 'número de celular';
        }

        if ($row['correo_cliente'] === $correo_cliente) {
            $repetidos[] = 'correo electrónico';
        }

        if ($row['nickname_cliente'] === $nickname_cliente) {
            $repetidos[] = 'nombre de usuario (nickname)';
        }
    }

    $repetidos_str = implode(', ', $repetidos);

    // Mostramos un mensaje con los valores repetidos
    echo '
            <script>
                alert("El ' . $repetidos_str . ' ya está registrado. Por favor, elija otros valores.");
                window.location = "../index.php";
            </script>
        ';

    exit; // Detenemos la ejecución del script para evitar el registro en la base de datos
}

// end verificar

$query_registro_cliente = "INSERT INTO 
                                cliente(nombre_completo_cliente, celular_cliente, correo_cliente, pass_cliente, nickname_cliente, cantidad_reparacion, cantidad_instalacion, cantidad_desarrollo_web, fecha_registro, ID_plank)
                                VALUES('$nombre_completo_cliente', '$celular_cliente', '$correo_cliente', '$pass_cliente', '$nickname_cliente', 0, 0, 0, NOW(), 1)";

$ejecutar_registro_cliente = mysqli_query($conexion, $query_registro_cliente);

if ($ejecutar_registro_cliente) {
    echo '
    <script>

        window.location = "../index.php";
        alert("Usuario registrado con exito");
       
              </script>

        ';
} else {
    echo '
            <script>
                alert("intentelo de nuevo");
                window.location = "../index.php";
            </script>
        ';
}

mysqli_close($conexion);
