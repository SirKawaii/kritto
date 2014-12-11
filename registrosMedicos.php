<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Medicos</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <?php
        SESSION_START();

        function comprueba_session(){
            @$user = $_SESSION['usuario'];
            @$aut = $_SESSION['autenticado'];
            if($aut == "si"){
                return "<a href='cerrar.php'>Bienvenido/a ".$user."</a>";
            }

        }
    ?>


</head>
<body >

    <div class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">YOUR LOGO</a>
            </div>
              <div class="navbar-collapse collapse">
                   <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                     <li><a href="penales.php">PENALES</a></li>
                    <li><a href="medicos.php">MEDICOS</a></li>
                     <li><a href="login.php">LOGIN</a></li>
                       <li><?php echo comprueba_session() ;?></li>

                </ul>
            </div>

        </div>
    </div>
   <!--/.NAVBAR END-->



        <section id="intro">
            <div class="container">
           <div class="row text-center" >
            <div class="col-md-12">

                 <div class="row text-center pad-row  ">
<div class="col-md-12 col-sm-12 ">

    					<?php
						if ($_POST){
							@$rut = $_POST['rut'];
						}else{
							@$rut = $_GET['rut'];}

						include("conection.php");

						$sql = "SELECT * FROM registrosmed where num_carnnet = '$rut' ";

						$resultado = mysqli_query($con,$sql)
						  or die('Error: ' . mysqli_error($con));

						 ?>

	<table class="table"  border="0">
  	<tr>
    <th class="clase" width="109" scope="col">RUT</th>
    <th class="clase" width="109" scope="col">FECHA</th>
    <th class="clase" width="109" scope="col">VER</th>
  	</tr>
  	<tr>
					<?php
					if(mysqli_num_rows($resultado) == 0){
						echo "<th class='clase' scope='col'>No existen Registros</th>";
					}
					else{

                        while($row = mysqli_fetch_array($resultado)){

                        echo "<th class='clase' scope='col'>$row[1]</th>
                    <th class='clase' scope='col'>
                        <p>Fecha: $row[10] </p>
                    </th>
                    <th class='clase' scope='col'><form name='form3' method='post' action='verRegistroMedico.php'>
                      <input type='hidden' name='id' value='$row[0]'>
                      <input type='submit' name='Submit3' value='Ver Registro'>
                            </form>
                        </th>
                    </tr>";
						}
						echo"<div class='col-md-12 col-sm-12 '>"
                   ;include("grafica.php"); echo "
                    </div>";
                    }

					mysqli_close($con);
                    ?>
	</table>





                    </div>



               </div>
        </div>
        </div></div></section>


    <!--/.INTRO END-->

    <section id="footer-sec" >

            <div class="container-fluid">
           <div class="row  pad-bottom" >
            <div class="col-md-4 col-sm-4">
                <h4> <strong>ABOUT COMPANY</strong> </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                <a href="#" >read more</a>
                </div>
               <div class="col-md-4 col-sm-4">
                    <h4> <strong>SOCIAL LINKS</strong> </h4>
                   <p>
                     <a href="#"><i class="fa fa-facebook-square fa-3x"  ></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-3x"  ></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-3x"  ></i></a>
                       <a href="#"><i class="fa fa-google-plus-square fa-3x"  ></i></a>
                   </p>
                </div>
               <div class="col-md-4 col-sm-4">
                   <h4> <strong>OUR LOCATION</strong> </h4>
                            <p>
                               234/JK , The Wondre Land, <br />
                               Newyork Street Junction  <br />
                               JUST USA -10909094
                            </p>
                    <a href="#" class="btn btn-primary" >SEND QUERY</a>
                </div>
               </div>
            </div>
    </section>
    <!--/.FOOTER END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
  <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
