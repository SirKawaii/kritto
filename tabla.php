<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<?php
        //inclusion de conexion
		include("conection.php");

	$sql = "SELECT rut FROM usuario";

	$resultado = mysqli_query($con,$sql)
	  or die('Error: ' . mysqli_error($con));

    //obtencion de datos por POST
            @$user = $_SESSION['usuario'];
            @$aut = $_SESSION['autenticado'];





	?>
</head>

<body>
<table class="table"  border="0">
  <tr>
    <th class="clase" width="46" scope="col">RUT</th>
    <th class="clase" width="64" scope="col">VER</th>
      <?php if($aut == "si"){
        echo "<th class='clase' width='109' scope='col'>INGRESAR</th>";
        echo "<th class='clase' width='106' scope='col'>ELIMINAR</th>";
      }
      ?>
  </tr>
  <tr>
  	<?php
		while($row = mysqli_fetch_array($resultado)){
            //acceso a ver carnet.
		echo "<th class='clase' scope='col'><a href='mostrarcarnet.php?rut=$row[0]'>$row[0]</a></th>
    <th class='clase' scope='col'>
    <form name='form1' method='post' action='registrosMedicos.php'>
		<input type='hidden' name='rut' value='$row[0]'>
      	<input type='submit' name='Submit' value='ver'>
        </form>
    </th>";
            //si no esta autenticado este ciclo evita el ingreso y la modificacion.
        if($aut == "si"){
        echo "<th class='clase' scope='col'><form name='form2' method='post' action='medico.php'>
            <input type='hidden' name='rut' value='$row[0]'>
            <input type='submit' name='Submit2' value='ingresar'>
            </form>
        </th>
        <th class='clase' scope='col'><form name='form3' method='post' action='eliminar.php'>
          <input type='hidden' name='rut' value='$row[0]'>
          <input type='submit' name='Submit3' value='eliminar'>
                </form>
            </th>
        </tr>";
        }
        else{
         echo "</tr>";
        }
	}
	?>
</table>

<?php
//cierre de conexion
mysqli_close($con);
?>
</body>
</html>
