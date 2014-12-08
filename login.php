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
    <title>Login</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px;
      }


      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px;
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      .login-form {
        margin-left: 65px;
      }

      legend {
        margin-right: -50px;
        font-weight: bold;
          color: #404040;
      }
</style>

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
              <p><a class="navbar-brand" href="#">YOUR LOGO</a></p>
              <p>&nbsp;</p>
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
    <div class="content col-md-12 col-sm-12">
      <div class="col-md-12 col-sm-12">
        <div class="login-form col-md-12 col-sm-12" >
          <h2>Login</h2>
          <form action="">
            <fieldset>
              <div class="clearfix">
                <input type="text" placeholder="Username">
              </div>
              <div class="clearfix">
                <input type="password" placeholder="Password">
              </div>
              <button class="btn primary" type="submit">Sign in</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
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
