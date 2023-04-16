<?php
if(isset($_POST["cancelar"])){
    header("Location: index.php");
}
else{
    include "conexion.inc.php";
    $CI=$_POST["CI"];
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $nombre=$_POST["nombre"];
    $fechaNac=$_POST["fechaNac"];
    $telefono=$_POST["telefono"];
    $departamento=$_POST["departamento"];
    $rol=$_POST["rol"];
    
    if(!isset($_POST["operacion"])){
        $sql="update persona set nombre_Completo='$nombre',fecha_De_Nacimiento='$fechaNac',telefono='$telefono',departamento='$departamento' where CI=$CI";
        mysqli_query($con,$sql);
        $sql="update usuario set usuario='$usuario',password='$password' where CI=$CI";
    }else{
        $sql="insert persona(CI,nombre_Completo,fecha_De_Nacimiento,telefono,departamento) ";
        $sql.="values($CI,'$nombre','$fechaNac','$telefono','$departamento');";
        mysqli_query($con,$sql);
        $sql="insert usuario(CI,usuario,password,rol)";
        $sql.="values($CI,'$usuario','$password','$rol');";
    }
    mysqli_query($con,$sql);    
    header("Location: todoBien.php");
}
?>
