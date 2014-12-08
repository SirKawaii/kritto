<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<?php

include ("conection.php");
 @$rut= $_POST['rut'];
 @$nombres= $_POST['nombres'];
 @$ap_paterno = $_POST['ap_paterno'];
@$ap_materno = $_POST['ap_materno'];
 @$fech_nacimiento= $_POST['fech_nacimiento'];
 @$nacionalidad= $_POST['nacionalidad'];
 @$ciudad= $_POST['ciudad'];
 @$fech_emision= $_POST['fech_emision'];
 @$fech_vencimiento= $_POST['fech_vencimiento'];
 @$sexo= $_POST['sexo'];
 @$profesion= $_POST['profesion'];
 @$fono = $_POST['fono'];
 @$bloodtipe = $_POST['sangre'];

move_uploaded_file($_FILES['archivo']['tmp_name'], "temp/" . $_FILES['archivo']['name']);
$imag= $_FILES['archivo']['name'];
$ruta = "temp/$imag";
echo "nombre imagen".$imag."<br>";
echo $ruta;
echo "<img src=".$ruta." heigth=250px width=200px ></img>";

//aqui



$sqlcarnet = "INSERT INTO datos (rut,nombres,ap_paterno,ap_materno,fc_nac,pais_nac,ciudad,fech_ems,fech_venc,sexo,imagen)
VALUES('$rut','$nombres','$ap_paterno','$ap_materno','$fech_nacimiento','$nacionalidad','$ciudad','$fech_emision','$fech_vencimiento','$sexo','$ruta')";
if (!mysqli_query($concarnet,$sqlcarnet)) {
  die('Error carnet: ' . mysqli_error($concarnet));
}else{



$sqlmedico = "INSERT INTO usuario (nombre,apellidos,ciudad,telefonodecontacto,rut,bloodtipe) VALUES('$nombres','$ap_paterno','$ciudad','$fono','$rut','$bloodtipe')";

if (!mysqli_query($con,$sqlmedico)) {
  die('Error medico: ' . mysqli_error($con2));
}}



mysqli_close($concarnet);
mysqli_close($con);




?>



</head>

<body>
</body>
</html>
