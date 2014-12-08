<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="es.css" rel="stylesheet" type="text/css" />
<style type="text/css">

a{
color:#FFFFFF;
}

</style>
</head>
<?php
$rut = $_GET['rut'];
?>
<body>
<div id="inicio">

<div id="menu">
<div id="esp"></div>
<center>
<div id="text">
<strong>Elige que registro ver</strong>
</div>
<div id="text1">
<br/>
<br/>
 <button class="boton"><a href="../integral2/registrosmedicos.php?rut=<?php echo $rut; ?>" >Registro Medico</a></button>
 <br/>
 <br />
 <button class="boton"><a href="../integral2/delictual.php?rut=<?php echo $rut;?>">Registro Delictual</a></button>

</div>
</div>
</center>
</div>

</body></html>
