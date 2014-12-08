<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>

<?php
include ("conection.php");
$Nombre= $_POST["Nombre"];
$Apellidos= $_POST["Apellidos"];
$Rut =$_POST["Rut"];
$Direccion= $_POST["Direccion"];
$Ciudad= $_POST["Ciudad"];
$Telefonodecontacto= $_POST["Telefonodecontacto"];

$sql = "INSERT INTO usuario (Nombre,Apellidos,Direccion,Ciudad,Telefonodecontacto,Rut)
VALUES('$Nombre','$Apellidos','$Direccion','$Ciudad','$Telefonodecontacto','$Rut')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}


mysqli_close($con);
?>











