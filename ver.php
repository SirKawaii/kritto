<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<title>Ver Usuario</title>
<?php
if ($_POST){
	@$rut = $_POST['rut'];
}else{
	@$rut = $_GET['rut'];}



	// Check connection

		include("conection.php");
	$sql = "SELECT * FROM usuario WHERE rut = '$rut'";

	$resultado = mysqli_query($con,$sql)
	  or die('ERROR ' . mysqli_error($con));

	$resultado = mysqli_query($con,$sql)
	  or die('Error: ' . mysqli_error($con));
	  $row = mysqli_fetch_array($resultado);

	  echo "nombre: ".$row[1];
	  echo "rut: ".$row[6];
	  echo "apellido: ".$row[2];

?>
</head>

<body>
</body>
</html>
