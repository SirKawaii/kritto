<?php
    $usuario = $_POST['usuario'];
    $pass = $_POST['secreto'];

    include("conection.php");

	$sql = "SELECT * FROM registro WHERE usuario = '$rut' && pass = '$pass'  ";

	$resultado = mysqli_query($con,$sql)
	  or die('Error: ' . mysqli_error($con));
	  $row = mysqli_fetch_array($resultado);

    // su no tiene columnas lo matamos a palos.
?>
