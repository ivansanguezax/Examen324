<?php
include "conexion.inc.php";

if(isset($_POST["Aceptar"])){
    $usuario = mysqli_real_escape_string($con, $_POST["usuario"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $stmt = mysqli_prepare($con, "SELECT * FROM usuario WHERE usuario=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $password);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($resultado) > 0) {
        session_start();
        if(isset($_SESSION["contador"])) {
            $_SESSION["contador"]++;
        } else {
            $_SESSION["contador"] = 1;
        }

        $datos = mysqli_fetch_array($resultado);
        $CI = $datos["CI"];
        $rol = $datos["rol"];

        $stmt2 = mysqli_prepare($con, "SELECT * FROM persona WHERE CI=?");
        mysqli_stmt_bind_param($stmt2, "i", $CI);
        mysqli_stmt_execute($stmt2);
        $resultado2 = mysqli_stmt_get_result($stmt2);
        $datos2 = mysqli_fetch_array($resultado2);

        if($rol == "ESTUDIANTE"){
            header('Location: inicio.php');
        } else {
            header('Location: listado.php');
        }
        exit;
    } else {
        echo "<h2>El usuario no existe</h2>";
        include "index.php";
    }
}
?>
