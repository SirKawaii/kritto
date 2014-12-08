<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>

<link href="es.css" rel="stylesheet" type="text/css" />

<?php
$rut = $_GET['rut'];
$localIP = getHostByName(php_uname('n'));

include ("conection.php");
$sqlmedico ="SELECT * FROM datos WHERE rut= '$rut' LIMIT 1";
$result = mysqli_query($concarnet,$sqlmedico)
						  or die('Error: ' . mysqli_error($concarnet));


while($row = mysqli_fetch_array($result)){
$nombre = $row['nombres'];
$ap_paterno = $row['ap_paterno'];
$ap_materno = $row['ap_materno'];
$fc_nac = $row['fc_nac'];
$pais_nac = $row['pais_nac'];
$ciudad = $row['ciudad'];
$fech_ems = $row['fech_ems'];
$fech_venc = $row['fech_venc'];
$sexo = $row['sexo'];
$imagen = $row['imagen'];
}



?>
</head>

<body>

<div id="inicio">
<div id="delante">
<center>
<div id="text3">
  <strong>REPUBLICA DE CHILE <br/></strong>
 </div>
 <div id="text4">
   SERVICIO DE REGISTRO CIVIL E IDENTIFICACION<br />
  CEDULA DE IDENTIDAD <br />
  </div>
  <p>
  </center>
  <div id="foto">
<?php
echo "<img src=".$imagen." heigth=250px width=200px ></img>";
?><br />
<br />
 RUN <?php echo "$rut"; ?>.
 </div>
 <div id="text5">
APELLIDOS <br /> <div id="text4"><?php echo "$ap_paterno"; ?><br /></div>
APELLIDOS <br /> <div id="text4"><?php echo "$ap_materno"; ?><br /></div>
NOMBRES <br />	<div id="text4"><?php echo"$nombre"; ?><br /></div>
SEXO <div id="text4"><?php echo "$sexo"; ?></div>
PAIS DE NACIONALIDAD <div id="text4"><?php echo"$pais_nac"; ?><br /></div>
FECHA DE NACIMIENTO <br /> <div id="text4"><?php echo "$fc_nac"; ?><br /></div>
FECHA DE EMISION <br /> <div id="text4"><?php echo "$fech_ems"; ?><br /></div>
FECHA DE VENCIMIENTO <br /> <div id="text4"><?php echo "$fech_venc"; ?></div>
 </div>
</div><br />
<div id="delante">
<div id="text5">
<div id="huella"></div>
CIUDAD <div id="text4"><?php echo "$ciudad"; ?></div>
<?PHP
$persona = "http://$localIP/integral2/menuqr.php?rut=$rut";

//CODIGO QR
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "phpqrcode/qrlib.php";

    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);


    $filename = $PNG_TEMP_DIR.'$rut.png';

    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'M';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['rut'])) {

        //it's very important!
        if (trim($persona) == '')
            die('data cannot be empty! <a href="?">back</a>');

        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($rut.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($persona, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

    } else {

        //default data
        echo 'You can provide data in GET parameter: <a href="?rut=like_that">like that</a><hr/>';
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);

    }

    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';

?>
	<a href="<?php echo $persona;?>">Link al contenido del QR</a>
</div>

</div>
</div>
</body>
</html>
