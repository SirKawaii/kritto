<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="es.css" rel="stylesheet" type="text/css" />
<?php
	@$tipo = $_GET['tipo'];
?>

</head>

<body>
	<h1>Elija al ciudadano</h1>
	<table width="200" border="1">
	<?php
		include ("conection.php");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($concarnet, "SELECT * FROM datos");

while($row = mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['rut']."</td>";
	echo "<td>".$row['nombres']."</td>";
	echo "<td>".$row['ap_paterno']."</td>";
	echo "<td>".$row['ap_materno']."</td>";
	echo "<td><a href='mostrarcarnet.php?rut=".$row['rut']."'>modificar </a></td>";
	echo "</tr>";
}
	?>
</table>

</body>
</html>
