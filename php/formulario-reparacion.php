<?php


include 'conexion.php';

session_start();

if (!isset($user)) {
    echo "iniciar sesion para poder solicitar servicio";
    exit;
}
$user = $_SESSION['user'];

$direccion = $_POST['direccion'];
$equipo = $_POST['equipo'];
$marca_modelo = $_POST['marca_modelo'];
$problema = $_POST['problema'];
$metodo_pago = $_POST['metodo-pago'];



$query_registro_solicitud = "INSERT INTO 
                                reparacion(direccion_reparacion, equipo_reparacion, marca_modelo_reparacion, descripcion_reparacion
                                , metodo_pago_reparacion, calificacion_reparacion, fecha_reparacion,  ID_cliente, ID_estado_reparacion)
                                VALUES('$direccion', '$equipo', '$marca_modelo', '$problema', '$metodo_pago', 0, NOW(), $user, 1)";

$ejecutar_registro_cliente = mysqli_query($conexion, $query_registro_solicitud);


mysqli_close($conexion);


?>