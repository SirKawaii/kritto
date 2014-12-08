<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Eliminar</title>
<?php
	@$ruteliminado = $_POST['rut'];

		include("conection.php");
	// Check connection


	$sql = "DELETE from usuario WHERE rut = '$ruteliminado'";

	$resultado = mysqli_query($con,$sql)
	  or die('No se pudo eliminar el Usuario ' . mysqli_error($con));

?>
	  <script>
	  	alert("rut <?php echo $ruteliminado;?> Eliminado");
		location.href="medicos.php";
	  </script>
</head>

<body>
</body>
</html>
