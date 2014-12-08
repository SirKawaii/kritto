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
<title>Documento sin t&iacute;tulo</title>
<?php
	@$rut = $_POST['rut'];

		include("conection.php");

	$sql = "SELECT * FROM usuario WHERE rut = '$rut'";

	$resultado = mysqli_query($con,$sql)
	  or die('Error: ' . mysqli_error($con));
	  $row = mysqli_fetch_array($resultado);

?>
</head>

</head>

<body>

<center>
<div id="text3">
  <strong>REGISTRO MEDICO<br/></strong>
 </div>
  <p>
</center>
  <div id="foto">

<form id="form2" name="form2" method="post" action="recogmedico.php">
  <label><br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  Nombre
  <input name="Nombre" type="text" value="<?php echo $row[1]; ?>" disabled="disabled" />
  </label>
  <p>
    <label>Apellido
    <input type="text" name="Apellido" value="<?php echo $row[2]; ?>" disabled="disabled" />
    </label>
  </p>
  <p>
    <label>Rut
    <input type="text" value="<?php echo $rut; ?>" disabled />
    <input type="text" name="Rut" value="<?php echo $rut; ?>" hidden="hidden" />
    </label>
  </p>
  <p>
    <label>Direccion
    <input type="text" name="Direccion" value="<?php echo $row[3]; ?>" disabled="disabled" />
    </label>
  </p>
  <p>&nbsp;</p>

<p>&iquest;Est&aacute; afiliado a alg&uacute;n seguro m&eacute;dico u Obra Social? </p>

  <label>Cual?
  <input type="text" name="Cual_afiliado" required />
  </label>
  <label>N° a llamar
  <input type="text" name="N_a_llamar" pattern="[+.]?\d[56]\d{3}\d{3}[-.]?\d{4}\b" placeholder="+56CCxxxxxxxx" required />
  </label>


  <label><br />
  <br />
  Grupo sanguineo
  <input type="text" name="Gruposanguineo" pattern="\w{0,1}\w[+|-]{1}" placeholder="ej: A+ ; AB- ; O-" required />
  </label>


  <label>Temperatura
  <input type="text" name="Temperatura" pattern="[4-9]{2}" placeholder="ingresa solo la temperatura." required  />
  </label>
  <p>
    <label>Presion Arterial
    <input type="text" name="Presionarterial" pattern="\b\d{3}\b" placeholder="Ej: 200" required />
    </label>
  </p>

<p>&nbsp;</p>
<p>Tiene Ud. reacci&oacute;n al&eacute;rgica a:</p>

  <label>Suero
  <select name="select" required>
    <option>Si</option>
    <option>No</option>
  </select>
  </label>
  <label>Drogas
  <select name="select2">
    <option>Si</option>
    <option>No</option>
  </select>
  </label>
  <label>Cual?
  <input type="text" name="Cual_droga" />
  </label>
  <p>
    <label>Alimentos
    <select name="select3">
      <option>Si</option>
      <option>No</option>
    </select>
    </label>
    <label>Cual?
    <input type="text" name="Cual_alimento" />
    </label>
    <label>Otros
    <input type="text" name="Otros" />
    </label>
  </p>
  <p>
    <label>Si su afirmacion es positiva a algun tipo de alergia describir su reaccion
    <input type="text" name="Reaccionalergica" />
    </label></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <label>
  <input type="submit" name="Submit" value="Enviar" />
  </label>
</form>
<p>&nbsp;</p>
</body>
</html>
