<?php

session_start();
require 'conexion.php';
$user = $_SESSION['user'];





if(isset($_POST['save-profile'])) {
    if(isset($_SESSION['user'])) {
        $username = $_SESSION['user'];
        $carpetaPath = "../img/usuario/" . $username;

        if(!file_exists($carpetaPath)) {
            if(mkdir($carpetaPath)) {
                echo "Carpeta creada exitosamente.";
            } else {
                echo "Error al crear la carpeta.";
            }
        }

        $perfilFileName = "perfil.jpg";
        $perfilFilePath = $carpetaPath . "/" . $perfilFileName;

        if(isset($_FILES['imagen'])) {
            $imagen = $_FILES['imagen'];
            $imagenNombre = $imagen['name'];
            $imagenTipo = $imagen['type'];
            $imagenTamaño = $imagen['size'];
            $imagenTempPath = $imagen['tmp_name'];

            if($imagenTipo == 'image/jpeg' && $imagenTamaño <= 1000000) {
                // Eliminar la imagen existente si existe
                if(file_exists($perfilFilePath)) {
                    unlink($perfilFilePath);
                }

                if(move_uploaded_file($imagenTempPath, $perfilFilePath)) {
                    echo "Imagen de perfil subida exitosamente.";

                } else {
                    echo "Error al subir la imagen.";
                }
            } else {
                echo "La imagen debe ser un archivo JPEG y no exceder los 1000KB.";
            }
        }

        header("Location: ../cliente.php");
        exit();


    } else {
        echo "No se ha iniciado sesión.";
    }
}

if(isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
    $carpetaPath = "../img/usuario/".$username;
    $perfilFilePath = $carpetaPath . "/perfil.jpg";

    if(isset($_POST['delete-profile'])) {
        if(file_exists($perfilFilePath)) {
            if(unlink($perfilFilePath)) { // Elimina la imagen
                echo "Imagen eliminada exitosamente.";
            } else {
                echo "Error al eliminar la imagen.";
            }
        } else {
            echo "La imagen no existe.";
        }
    }
    header("Location: ../cliente.php");
        exit();
} else {
    echo "No se ha iniciado sesión.";
}

?>