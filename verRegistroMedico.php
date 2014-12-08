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
                    <li><a href="index.html">HOME</a></li>
                     <li><a href="penales.php">PENALES</a></li>
                    <li><a href="medicos.php">MEDICOS</a></li>
                     <li><a href="login.php">LOGIN</a></li>

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
							@$id = $_POST['id'];
						}else{
							@$id = $_GET['id'];}

						include("conection.php");

						$sql = "SELECT * FROM registrosmed where id_med = '$id' ";

						$resultado = mysqli_query($con,$sql)
						  or die('Error: ' . mysqli_error($con));

                        $row = mysqli_fetch_array($resultado);


                    ?>
                      <h2>Registro para <?php echo $row[1]; ?></h2>
                      <p>Registro con fecha <?php echo $row[10]; ?></p>
                      <div class="table-responsive">
                       <table class="table table-striped table-bordered">
                         <thead>
                           <tr>
                             <th>Afiliacion</th>
                             <th><?php echo $row[2]; ?></th>

                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td> Telefono de Contacto</td>
                             <td><?php echo $row[3]; ?></td>
                           </tr>
                           <tr>
                             <td>Temperatura</td>
                             <td><?php echo $row[4]; ?></td>
                           </tr>
                           <tr>
                             <td>Presion Arterial</td>
                             <td><?php echo $row[5]; ?></td>
                           </tr>
                           <tr>
                             <td>Alergia a medicamento</td>
                             <td><?php echo $row[6]; ?></td>
                           </tr>
                           <tr>
                             <td>Alergia a comida</td>
                             <td><?php echo $row[7]; ?></td>
                           </tr>
                           <tr>
                             <td>Otros</td>
                             <td><?php echo $row[8]; ?></td>
                           </tr>
                           <tr>
                             <td>Reacciones Alergicas</td>
                             <td><?php echo $row[9]; ?></td>
                           </tr>
                         </tbody>
                       </table>

					 </div>
                     <div class="col-md-4 col-sm-4 ">

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
  <!-- Cierre de la base de datos -->
  <?php
  mysqli_close($con);
  ?>
</body>
</html>
