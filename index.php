
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Sistema de Tutorias UPSLP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    
       

    </head>

    <body>

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.php"></a>
                            </h1>

                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li class="current-page">
                                        <a href="index.php"><i class="icon-home"></i><br />Inicio</a>
                                    </li>
                              
                                    <li>
                                        <a href="about.html"><i class="icon-user"></i><br />Acerca de</a>
                                    </li>
                                    <li>
                                        <a href="contact.html"><i class="icon-envelope-alt"></i><br />Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Services -->
         <div class="testimonials-title">
                <h3>Inicio de Sesión</h3>
        </div>
      
        <div class="what-we-do container">
            <div class="row">
                <div class="service span12">
                     <div class="contact-us container">
                        <div class="row">
                            <div class="contact-form span12">
                                <p>Ingrese sus datos</p>
                                <form method="post" action="assets/sendmail.php">
                                    <label for="name" class="nameLabel">Usuario</label>
                                      <input id="name" type="text" name="name" placeholder="Ingresa tu usuario.." required>
                                    <label for="email" class="emailLabel">Contrasena</label>
                                      <input id="email" type="text" name="email" placeholder="Ingresa tu contrasena..." required>
                                    
                                    <button type="submit">Enviar</button><br> 
                                </form>
                                <center><a href="registro.php">Registrarse</a></center>
                            </div>
                           
                        </div>
                    </div>
                </div>
          
            </div>
        </div>


        <!-- Site Description -->
        <div class="presentation container">
            <h2><span class="violet">Sistema de Tutorías</span>.</h2>
            <p>Universidad Politécnica de San Luis Potosí</p>
        </div>

       <br><br>
        <!-- Footer -->
        <footer>
            <div class="container">
             
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright 2013 UPSLP</p>
                    </div>
                    <div class="social span8">
                        <a class="facebook" href=""></a>
                       
                        <a class="twitter" href=""></a>
                      
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

