<?php


include 'conexion.php';

session_start();

if (!isset($user)) {
    echo "iniciar sesion para poder solicitar servicio";
    exit;
}
$user = $_SESSION['user'];

$empresa = $_POST['empresa'];
$descripcion = $_POST['descripcion'];
$objetivo = $_POST['objetivo'];
$publico = $_POST['publico'];



$query_registro_solicitud = "INSERT INTO 
                                desarrollo_web(nombre_empresa_desarrollo_web, descripcion_empresa_desarrollo_web, objetivos_desarrollo_web, publico_desarrollo_web,
                                calificacion_desarrollo_web, fecha_desarrollo_web, ID_cliente, ID_paquetes_escogidos)
                                VALUES('$empresa', '$descripcion', '$objetivo', '$publico', 5, NOW(), $user, 1)";

$ejecutar_registro_cliente = mysqli_query($conexion, $query_registro_solicitud);


mysqli_close($conexion);


?>