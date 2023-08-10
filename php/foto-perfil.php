<?php

if (isset($_POST['save-img'])) {
    foreach ($_FILES['imagenes']['tmp_name'] as $key => $tmp_name) {
        if ($_FILES['imagenes']['name'][$key]) {
            $filename = $_FILES['imagenes']['name'][$key];
            $temporal = $_FILES['imagenes']['tmp_name'][$key];

            $directorio = "../img/proyectos/" . $ID . "/secundario/";
            if (!file_exists($directorio)) {
                mkdir($directorio, 0777);
            }
            $dir = opendir($directorio);
            $ruta = $directorio . '/' . $filename;
            if (move_uploaded_file($temporal, $ruta)) {
                header("Location: #");
                           
            } else {
                echo "no se subio";
            }
            closedir($dir);
        }
    }
}



?>