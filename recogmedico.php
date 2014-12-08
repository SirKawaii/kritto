<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<?php
        // Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
        date_default_timezone_set('America/Santiago');
        //Imprimimos la fecha actual dandole un formato
        $fecha = date("Y-m-d");
?>
</head>

<?PHP


$afil_cual= $_POST["Cual_afiliado"];
$rut =$_POST["Rut"];
$tel_con =$_POST["N_a_llamar"];
$grup_san =$_POST["Gruposanguineo"];
$temperatura =$_POST["Temperatura"];
$presion_art =$_POST["Presionarterial"];
$cual_suero =$_POST["Cual_droga"];
$cual_alimento =$_POST["Cual_alimento"];
$otros =$_POST["Otros"];
$reac_alerg =$_POST["Reaccionalergica"];


include ("conection.php");

$sql = "INSERT INTO registrosmed (num_carnnet, afil_cual,tel_con, temperatura, presion_art, cual_suero, cual_alimento, otros, rec_alerg, fecha )
VALUES('$rut', '$afil_cual','$tel_con', '$temperatura', '$presion_art', '$cual_suero', '$cual_alimento', '$otros', '$reac_alerg', '$fecha')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}


mysqli_close($con);

?>

<button onclick="window.location='medicos.php'">Continuar</button>



<body>
<?php echo $rut ; ?>
</body>
</html>
