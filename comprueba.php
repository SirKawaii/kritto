<?php
    SESSION_START();
    @$usuario = $_POST['usuario'];
    @$pass = $_POST['secreto'];

    include("conection.php");

	$sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario'";

	$resultado = mysqli_query($concarnet,$sql)
	  or die('Error: ' . mysqli_error($concarnet));
	  $row = mysqli_fetch_array($resultado);

    if($usuario == $row[1] && $pass == $row[2]){

            $_SESSION['autenticado'] = "si";
           $_SESSION['usuario'] = $usuario;
        // echo"<script type='text/javascript'> alert('has sido autenticado.')</script>";
        echo  "<script type='text/javascript'> document.location.href='index.php';</script>";
    }
    else{
        echo"<script type='text/javascript'> alert('Contraseña o Usuario incorrecto.')</script>";
        $_SESSION['usuario'] = null;
        $_SESSION['autenticado'] = null;
        session_destroy();

       echo "<h1>Contraseña incorrecta</h1>";
        echo  "<script type='text/javascript'> document.location.href='index.php';</script>";
    }



    // su no tiene columnas lo matamos a palos.
?>

