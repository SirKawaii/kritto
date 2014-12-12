<?php
    //inicio de session y toma de datos por POST
    SESSION_START();
    @$usuario = $_POST['usuario'];
    @$pass = $_POST['secreto'];

    include("conection.php");

    //consulta a la base de datos por el usuario y su contraseña
	$sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario'";

	$resultado = mysqli_query($concarnet,$sql)
	  or die('Error: ' . mysqli_error($concarnet));
	  $row = mysqli_fetch_array($resultado);

    // si los datos son correctos envia al index y agrega los datos de autenticado y usuario a las variables de session.
    if($usuario == $row[1] && $pass == $row[2]){

            $_SESSION['autenticado'] = "si";
           $_SESSION['usuario'] = $usuario;
        // echo"<script type='text/javascript'> alert('has sido autenticado.')</script>";
        echo  "<script type='text/javascript'> document.location.href='index.php';</script>";
    }
    else{
        //En caso contrario destruye la session, envia un mensaje y vuelve al index.
        echo"<script type='text/javascript'> alert('Contraseña o Usuario incorrecto.')</script>";
        $_SESSION['usuario'] = null;
        $_SESSION['autenticado'] = null;
        session_destroy();

       echo "<h1>Contraseña incorrecta</h1>";
        echo  "<script type='text/javascript'> document.location.href='index.php';</script>";
    }

?>

