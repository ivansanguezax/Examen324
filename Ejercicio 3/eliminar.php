<?php
include "conexion.inc.php";
$id=$_GET["id"];
$sql="DELETE FROM inscripcion where id_Inscripcion=$id";
mysqli_query($con,$sql);
header('Location: listado.php');
exit;
?>
