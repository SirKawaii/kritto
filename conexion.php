<?php
$conexion;
function conectar_bd()
{
    global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "root";
    $elPw  = "";
    $elServer ="localhost";
    $laBd = "carnet";

    //Conectar
    $conexion = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error());

    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexion ) or die (mysql_error());
/*	mysql_set_charset("utf8",$conexio);
*/}
?>
