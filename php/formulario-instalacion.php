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
                                instalacion(direccion_instalacion, equipo_programa_instalacion, marca_modelo_instalacion, descripcion_instalacion
                                , metodo_pago_instalacion, calificacion_instalacion, fecha_instalacion, estado_instalacion, ID_cliente)
                                VALUES('$direccion', '$equipo', '$marca_modelo', '$problema', '$metodo_pago', 0, NOW(), 0, $user)";

$ejecutar_registro_cliente = mysqli_query($conexion, $query_registro_solicitud);


mysqli_close($conexion);


?>