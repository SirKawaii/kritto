<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="es.css" rel="stylesheet" type="text/css" />

<?php
include("conexion.php");
conectar_bd();




?>

</head>

<body>
<div id="inicio">
<center>
<div id="text"> Carnet de Identidad</div>
</center>
<div id="text2">
<form action="guardar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <label></label>
  <p>&nbsp;</p>
  <p>Rut
    <label>
      <input id="rut" type="text" name="rut" onchange="validaelrut()" placeholder="12345678-0" autofocus required />
      <div id="comprobar"></div>
      </label>

  </p>
  <p>
    <label>Nombres
    <input type="text" name="nombres" required placeholder="Juanito Esteban" />
    </label>
  </p>
  <p>
    <label>Apellido Paterno </label>
    <label>
    <input type="text" name="ap_paterno" required />
    </label>
  </p>
    <p>
    <label>Apellido materno </label>
    <label>
    <input type="text" name="ap_materno" required />
    </label>
  </p>
  <p>Fecha de Nacimiento
    <label>
    <input type="text" name="fech_nacimiento" placeholder="MM/DD/YYYY" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" required />
    </label>
  </p>
  <p>Nacionalidad
    <label>
    <input type="text" name="nacionalidad" required />
    </label>
  </p>
  <p>Ciudad
    <label>
    <input type="text" name="ciudad" required />
    </label>
  </p>
  <p>
    <label>Telefono de contacto </label>
    <label>
      <input type="text" name="fono" id="fono" pattern="[+.]?\d[56]\d{3}\d{3}[-.]?\d{4}\b" placeholder="+56CCxxxxxxxx" required />
    </label>
</p>
  <p>
    <label>Grupo sanguineo </label>
    <label>
      <input type="text" name="sangre" id="sangre" pattern="\w{0,1}\w[+|-]{1}" placeholder="ej: A+ ; AB- ; O-" required />
    </label>
  </p>
  <p>Fecha de emision
    <label>
    <input type="text" name="fech_emision" placeholder="MM/DD/YYYY" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" required />
    </label>
  </p>
  <p>Fecha de vencimiento
    <label>
    <input type="text" name="fech_vencimiento" placeholder="MM/DD/YYYY" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" required />
    </label>
  </p>
  <p>
    <label>Sexo
    <select name="sexo" required>
      <option value="F" >Femenino</option>
      <option value="M">Masculino</option>
    </select>
</label>
  </p>
  <p>Profesion
    <label>
    <input type="text" name="profesion" required />
    </label>
  </p>
  <p>
    <label>Foto
    <input type="file" name="archivo" required />
    </label>
  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Generar Carnet" />
    </label>
</p>
  <p>&nbsp;</p>
</form>
</div>

</div>
</body>
</html>
