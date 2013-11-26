
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

        <!-- Favicon and touch icons -->
       

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
                                <a class="brand" href="index.html"></a>
                            </h1>

                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li class="current-page">
                                        <a href="index.html"><i class="icon-home"></i><br />Inicio</a>
                                    </li>
                                    <!--
                                    <li>
                                        <a href="portfolio.html"><i class="icon-camera"></i><br />Portfolio</a>
                                    </li>
                                    -->
                                    <!--
                                    <li>
                                        <a href="#"><i class="icon-comments"></i><br />Blog</a>
                                    </li>
                                    -->
                                    <!--
                                    <li>
                                        <a href="services.html"><i class="icon-tasks"></i><br />Services</a>
                                    </li>
                                    -->
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



        <!-- Titulo-->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h2>Bienvenid@/</h2>
                        <p>Nombre del Tutor</p>
                    </div>
                </div>
            </div>
        </div>
      
        <!--Carga de Kardex-->
         <div class="testimonials-title">
                <h3>Kardex</h3>
        </div>
            <div class="row">
                    <form method="post" action="subearchivo.php"   enctype="multipart/form-data">
                        <label for="" >Kardex Anterior</label>
                          <input id="" type="file" name="archivo"> <button type="submit">Enviar</button>
                        
                    </form>
            </div>
            <div class="row">
                    <form method="post" action="subirkardex1.php" enctype="multipart/form-data">
                        <label for="" >Kardex 1</label>
                          <input id="" type="file" name="kardex1"> <button type="submit">Enviar</button>
                        
                    </form>
            </div>
            <div class="row">
                    <form method="post" action="">
                        <label for="" >Kardex 2</label>
                          <input id="" type="file" name=""> <button type="submit">Enviar</button>
                        
                    </form>
            </div>
            <div class="row">
                    <form method="post" action="">
                        <label for="" >Kardex 3</label>
                          <input id="" type="file" name=""> <button type="submit">Enviar</button>
                        
                    </form>
                    <form action="periodo.php" method="post">
                   <?php
                    include("conexion.php");
                   $cons =mysql_query("SELECT * FROM semestre_anterior"); 
              
                 $rw=mysql_fetch_assoc($cons);
               
                   if($rw['Semestre_Anterior']=="")
                   {
                    echo "Ingrese el periodo anterior:<input type'text' name='periodo'>";
                    echo  "<input type='submit' value='Aceptar'>";
                }
                    ?>
                    </form>
          
            </div>
          <br>
     
        <!--TABLA DE ALUMNOS CON -->
        <div class="testimonials-title">
                
                <?php
               
                echo "<table width='100%' border='1' cellpadding='0' cellspacing='0' aling='center'>
                 <td  height='42' colspan='4' align='center' valign='middle' ><h3>Tutelados</h3></td>
                  <tr>
                  <td >Nombre</td>
                  <td >1 Contacto</td>
                  <td >2 Contacto</td>
                  <td >3 Contacto</td>
                  </tr>";

                $consulta =mysql_query("SELECT * FROM alumno"); 
                if($consulta){
                 while($row=mysql_fetch_assoc($consulta))
                 {
                    $matricula=$row['matricula'];
                   echo"
                   <tr>
                   <td>".utf8_encode($row['nombre'])."</td>
                   <td><a href='formato1prueba.php?m=$matricula'>Ralizar primer contacto</a><input type='button' value='Imprimir'></td>
                   <td></td>
                   <td></td>

                   </tr>
                  ";
                  }
                  }
                echo "  </table> ";                 

               ?>
               
        </div>
        <!-- Site Description -->
        <div class="presentation container">
            <h2><span class="violet">Sistema de Tutorias</span>.</h2>
            <p>Universidad Politecnica de San Luis Potosi</p>
        </div>

       <br><br>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span4">
                        <h4>Acerca de Nosotros</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <p><a href="">Read more...</a></p>
                    </div>
                    <div class="widget span4">
                        <h4>Ultimos Tweets</h4>
                        <div class="show-tweets"></div>
                    </div>
                   
                    <div class="widget span4">
                        <h4>Contactanos</h4>
                        <p><i class="icon-map-marker"></i> Address: Urbano Villalon #500</p>
                        <p><i class="icon-phone"></i> Phone: </p>
                        <p><i class="icon-envelope-alt"></i> Email: <a href="">contact@sistematutoriasupslp.edu.mx</a></p>
                    </div>
                </div>
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