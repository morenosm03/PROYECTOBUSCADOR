<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $contrasena = $_POST["password"];


    require_once 'conexion.php';
    require_once 'functions.inc.php';


    if(emptyInput($email, $contrasena) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../login.php?error=invalidemail");
        exit();
    }


    loginUser($conn, $email, $contrasena);
}
else{
    header("location: ../login.php");
    exit();
}
?>