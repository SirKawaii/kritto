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
    <title>Free Multipurpose Template : RUMA</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <?php

        //Inicio de session.
        SESSION_START();
        
        //funcion que comprueba si algun usuaio se a autenticado o no.
        function comprueba_session(){
            @$user = $_SESSION['usuario'];
            @$aut = $_SESSION['autenticado'];
            if($aut == "si"){
                //muestra el mensaje "bienvenido usuario"
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
                    <li><a href="index.html">HOME</a></li>
                     <li><a href="penales.php">PENALES</a></li>
                    <li><a href="medicos.php">MEDICOS</a></li>
                     <li><a href="login.php">LOGIN</a></li>
                      <!-- LLamada a la funcion de arriba que retorna la bienvenida al usuario autenticado. -->
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

                 <center><div class="row text-center pad-row ">
<div class="col-md-6 col-sm-4 ">
                        <img class="img-circle" src="imagenes/justicia.jpg" alt="" />
                           <h3><strong>Registros judiciales</strong> </h3>
                       <p>
                                Acceda a este menu para ver los registros
                                judiciales
            </p>
                            <a href="penales.php" class="btn btn-primary" >Acceder</a>
                    </div>
                     <div class="col-md-6 col-sm-4 ">
                        <img class="img-circle" src="imagenes/medico.jpg" alt="" />
                           <h3><strong>Registros medicos</strong> </h3>
                       <p>
                                Acceda a este menu para ver los registros medicos
                       </p>
                            <a href="medicos.php" class="btn btn-primary" >Acceder</a>
                    </div></div></center>
                 </div>

            </div>

               </div>
        </div>
        </section>

    <!--/.INTRO END-->

    <section id="footer-sec" >

            <div class="container">
           <div class="row  pad-bottom" >
            <div class="col-md-4">
                <h4> <strong>ABOUT COMPANY</strong> </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                <a href="#" >read more</a>
                </div>
               <div class="col-md-4">
                    <h4> <strong>SOCIAL LINKS</strong> </h4>
                   <p>
                     <a href="#"><i class="fa fa-facebook-square fa-3x"  ></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-3x"  ></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-3x"  ></i></a>
                       <a href="#"><i class="fa fa-google-plus-square fa-3x"  ></i></a>
                   </p>
                </div>
               <div class="col-md-4">
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
 t 
