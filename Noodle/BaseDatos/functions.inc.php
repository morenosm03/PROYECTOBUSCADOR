<?php

function emptyInput($email, $contrasena){
    $result;
    if (empty($email) || empty($contrasena)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $email){
    $sql = "SELECT * FROM noodle_usu_cuenta WHERE Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $email, $contrasena){
    $uidExists = uidExists($conn, $email);

    if ($uidExists === false){
        header("location: ../login.php?error=notexist");
        exit();
    }

    $pwdHashed = $uidExists["contraseña"];

    if($pwdHashed === $contrasena){
        $checkPwd = true;
    }
    else{
        $checkPwd = false;
    }

    if($checkPwd === false){
        header("location: ../login.php?error=wrongpassword");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["email"] = $uidExists["email"];
        header("location: ../index.php");
        exit();
    }
}

?>