<?php
$conn = new mysqli("localhost", "root", "", "plank");

if ($conn->connect_errno) {
    echo "NO hay conexion: (" . $conn->connect_errno . ")" . $conn->connect_errno;
}

session_start();
var_dump($_POST); 
$email = $_POST['email'];
//PASSWORD CIFRADO
//$password = md5($_POST['password']);
$password = $_POST['password'];




if (isset($_POST['login'])) {

    //QUERY VALIDAR USER AND PASSWORD
    $queryemail = mysqli_query($conn, "SELECT * FROM cliente WHERE correo_cliente = '$email' and pass_cliente = '$password'");
   

    $nr  = mysqli_num_rows($queryemail);

    if ($nr == 1) {
        $id_usuario = mysqli_fetch_array($queryemail);
        $_SESSION['user'] =  $id_usuario['ID_cliente'];
        $_SESSION['auth'] = true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
        $_SESSION['message-login'] = "WELCOME USER";
       
        header("Location: ../cliente.php");
        exit(0);
    } else {
        $_SESSION['message-login-fail'] = "FAIL USER";
        //header("Location: ../todos-servicios.php");
        echo"NO SE PUDO INICIAR SESION";
        exit(0);
    }
}


//CLOSE SESSION

if (isset($_POST['logout'])) {

    session_start();
    session_destroy();
    header("Location: ../index.php");


}
