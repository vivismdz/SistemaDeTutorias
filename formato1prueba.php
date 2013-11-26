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
                        <h2>Formato 1/</h2>
                        <p>Ingrese los campos necesarios</p>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="what-we-do container">
            <div class="row">
             <h4>ANÁLISIS DEL SEMESTRE ANTERIOR Y PROPÓSITOS PARA ESTE SEMESTRE</h4>
                 
                    <form method="post" action="guardaforma1.php">
                       <?php
                       $matricula=$_GET['m'];
                       include("conexion.php");

                       $consulta =mysql_query("SELECT * FROM alumno where matricula='$matricula'");
                       $row=mysql_fetch_assoc($consulta);
                       
                       ?>
                        <table>
                        <tr>
                            <td>Nombre del Estudiante:</td>
                            <td>
                            <input type=text name="nombreEstudiante" value="<?php echo utf8_encode($row['nombre']); ?>" readonly>
                            <input type=hidden name="matricula" value="<?php echo $matricula ?>" >
                            </td>
                        </tr>

                        <tr>
                            <td>Carrera:</td>
                            <td>
                            <input type=text name="carrera">
                            </td>
                            <td>Semestre: </td>
                            <td>
                            <input type=text name="semestre">
                            </td>
                            <td>Grupo: </td>
                            <td>
                            <input type=text name="grupo">
                            </td>
                            <td>Fecha: </td>
                            <td>
                            <input type=text name="fecha" value=<?php echo date("Y-m-d"); ?>>
                            </td>
                        </tr>
                        </table>
                        <h5>I.ANÁLISIS DEL SEMESTRE ANTERIOR</h5>
                        <h6>  A.EVALUACIÓN DE LA  SITUACIÓN ACADÉMICA DEL SEMESTRE ANTERIOR</h6>
                        
                        <div class="row">
                            <div class="span2">
                                 Nombre de la materia cursada en  el semestre anterior
                            </div>
                            <div class="span2">
                                Grado de dificultad (MD: muy difícil, D: difícil, N: normal, F: fácil, MF muy fácil)
                            </div>
                            <div class="span2">
                                Preferencia (alta, media, baja)
                            </div>
                            <div class="span2">
                                Tiempo dedicado (mucho,  suficiente, poco)
                            </div>
                            <div class="span2">
                                Calificación Final del semestre anterior
                            </div>
                            <div class="span2">
                                Anotar A (Aprobado) NA (No Acreditado)
                            </div>
                           
                        </div>
                     
                     <?php
                      $cons =mysql_query("SELECT * FROM semestre_anterior"); 
                      $row=mysql_fetch_assoc($cons);
                      $periodo=$row['Semestre_Anterior'];
                      echo $periodo;
                      $i=0;
                      $suma=0;
                      $consulta2 =mysql_query("SELECT * FROM kardex_general where matricula='$matricula' and periodo='$periodo'");
                      while($row1=mysql_fetch_assoc($consulta2))
                 {

                 $materia[$i]=$row1['materia'];
                 $final[$i]=$row1['final'];
                 $status[$i]=$row1['status'];
                 $suma=$final[$i]+$suma;
                 $i++;
                 }
                 $promedio=$suma/($i);
         ?>
                   
                        <div class="row">
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo  utf8_encode($materia[0]); ?>" name="m1">
                            </div>
                            <div class="span2">
                                <select name="dificultad1">
                                <option VALUE="-">-</option>
                                <option VALUE="MD">MD</option>
                                <option VALUE="D">D</option>
                                <option VALUE="N">N</option>
                                <option VALUE="F">F</option>
                                <option VALUE="MF">F</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="preferencia1">
                                <option VALUE="-">-</option>
                                <option VALUE="alta">Alta</option>
                                <option VALUE="media">Media</option>
                                <option VALUE="baja">Baja</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="tiempo1">
                                <option VALUE="-">-</option>
                                <option VALUE="">Mucho</option>
                                <option VALUE="">Suficiente</option>
                                <option VALUE="">Poco</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $final[0]; ?>" name="f1">
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $status[0]; ?>" name="s1">
                            </div>
                           
                        </div>
                         <div class="row">
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo  utf8_encode($materia[1]); ?>" name="m2">
                            </div>
                            <div class="span2">
                                <select name="dificultad2">
                                <option VALUE="-">-</option>
                                <option VALUE="MD">MD</option>
                                <option VALUE="D">D</option>
                                <option VALUE="N">N</option>
                                <option VALUE="F">F</option>
                                <option VALUE="MF">F</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="preferencia2">
                                <option VALUE="-">-</option>
                                <option VALUE="alta">Alta</option>
                                <option VALUE="media">Media</option>
                                <option VALUE="baja">Baja</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="tiempo2">
                                <option VALUE="-">-</option>
                                <option VALUE="">Mucho</option>
                                <option VALUE="">Suficiente</option>
                                <option VALUE="">Poco</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $final[1]; ?>" name="f2">
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $status[1]; ?>" name="s2">
                            </div>
                           
                        </div>
                         <div class="row">
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo  utf8_encode($materia[2]); ?>" name="m3">
                            </div>
                            <div class="span2">
                                <select name="dificultad3">
                                <option VALUE="-">-</option>
                                <option VALUE="MD">MD</option>
                                <option VALUE="D">D</option>
                                <option VALUE="N">N</option>
                                <option VALUE="F">F</option>
                                <option VALUE="MF">F</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="preferencia3">
                                <option VALUE="-">-</option>
                                <option VALUE="alta">Alta</option>
                                <option VALUE="media">Media</option>
                                <option VALUE="baja">Baja</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="tiempo3">
                                <option VALUE="-">-</option>
                                <option VALUE="">Mucho</option>
                                <option VALUE="">Suficiente</option>
                                <option VALUE="">Poco</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $final[2]; ?>" name="f3">
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $status[2]; ?>" name="s3">
                            </div>
                           
                        </div>
                         <div class="row">
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo  utf8_encode($materia[3]); ?>" name="m4">
                            </div>
                            <div class="span2">
                                <select name="dificultad4">
                                <option VALUE="-">-</option>
                                <option VALUE="MD">MD</option>
                                <option VALUE="D">D</option>
                                <option VALUE="N">N</option>
                                <option VALUE="F">F</option>
                                <option VALUE="MF">F</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="preferencia4">
                                <option VALUE="-">-</option>
                                <option VALUE="alta">Alta</option>
                                <option VALUE="media">Media</option>
                                <option VALUE="baja">Baja</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="tiempo4">
                                <option VALUE="-">-</option>
                                <option VALUE="">Mucho</option>
                                <option VALUE="">Suficiente</option>
                                <option VALUE="">Poco</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $final[3]; ?>" name="f4">
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  echo $status[3]; ?>" name="s4">
                            </div>
                           
                        </div>
                         <div class="row">
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>4){echo  utf8_encode($materia[4]);} ?>" name="m5">
                            </div>
                            <div class="span2">
                                <select name="dificultad5">
                                <option VALUE="-">-</option>
                                <option VALUE="MD">MD</option>
                                <option VALUE="D">D</option>
                                <option VALUE="N">N</option>
                                <option VALUE="F">F</option>
                                <option VALUE="MF">F</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="preferencia5">
                                <option VALUE="-">-</option>
                                <option VALUE="alta">Alta</option>
                                <option VALUE="media">Media</option>
                                <option VALUE="baja">Baja</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="tiempo5">
                                <option VALUE="-">-</option>
                                <option VALUE="">Mucho</option>
                                <option VALUE="">Suficiente</option>
                                <option VALUE="">Poco</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>4){echo $final[4]; } ?>" name="f5">
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>4){echo $status[4]; }?>" name="s5">
                            </div>
                           
                        </div>
                         <div class="row">
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>5){echo  utf8_encode($materia[5]);} ?>" name="m6">
                            </div>
                            <div class="span2">
                                <select name="dificultad6">
                                <option VALUE="-">-</option>
                                <option VALUE="MD">MD</option>
                                <option VALUE="D">D</option>
                                <option VALUE="N">N</option>
                                <option VALUE="F">F</option>
                                <option VALUE="MF">F</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="preferencia6">
                                <option VALUE="-">-</option>
                                <option VALUE="alta">Alta</option>
                                <option VALUE="media">Media</option>
                                <option VALUE="baja">Baja</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="tiempo6">
                                <option VALUE="-">-</option>
                                <option VALUE="">Mucho</option>
                                <option VALUE="">Suficiente</option>
                                <option VALUE="">Poco</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>5){echo $final[5]; }?>" name="f6">
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>5){echo $status[5];} ?>" name="s6">
                            </div>
                           
                        </div>
                         <div class="row">
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>6){echo  utf8_encode($materia[6]);} ?>" name="m7">
                            </div>
                            <div class="span2">
                                <select name="dificultad7">
                                <option VALUE="-">-</option>
                                <option VALUE="MD">MD</option>
                                <option VALUE="D">D</option>
                                <option VALUE="N">N</option>
                                <option VALUE="F">F</option>
                                <option VALUE="MF">F</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="preferencia7">
                                <option VALUE="-">-</option>
                                <option VALUE="alta">Alta</option>
                                <option VALUE="media">Media</option>
                                <option VALUE="baja">Baja</option>
                                </select>
                            </div>
                            <div class="span2">
                                <select name="tiempo7">
                                <option VALUE="-">-</option>
                                <option VALUE="">Mucho</option>
                                <option VALUE="">Suficiente</option>
                                <option VALUE="">Poco</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>6){echo $final[6];} ?>" name="f7">
                            </div>
                            <div class="span2">
                                <input id="name" type="text" value="<?php  if($i>6){echo $status[6]; }?>" name="s7">
                            </div>
                           
                        </div>
                        
                        <div class="row">
                            <div class="span8">
                                Promedio Final
                            </div>
                            
                            
                            <div class="span2">
                                <input id="name" type="text" value="<?php echo $promedio; ?>" name="promedio" >
                            </div>
                           
                        </div>


                        1. Las calificaciones obtenidas al final del semestre anterior ¿Corresponden a tu  esfuerzo realizado?<br> Si <input type=radio name="calobt" value="Si"> No <input type=radio name="calobt" value="No">
                        ¿Por qué? <input type=text name="porquecalobt"><br><br>
                        2. En algún momento del semestre anterior,sentiste que disminuiste tu rendimiento académico, por alguna de las siguientes causas:<br>
                        Baja Motivación  <input type=checkbox name="rendimiento1" value="Baja Motivacion"> 
                        Poco Estudio  <input type=checkbox name="rendimiento2" value="Poco Estudio">
                        Estudio sin Metodo  <input type=checkbox name="rendimiento3" value="Estudio sin Metodo">
                        Problemas personales  <input type=checkbox name="rendimiento4" value="Problemas Personales">
                        Otras  <input type=checkbox name="rendimiento5" value=""><br><br>
                        ¿Cuáles? <input type=text name="otras">

                        <h5>B.DIAGNÓSTICO DE LAS MATERIAS REPROBADAS O ATRASADAS POR NO HABERSE INSCRITO</h5>

                        <input type=text name="diagnosticoMat" value="">

                        <br><br>
                        <h5>II.  PROPÓSITOS Y LÍNEAS DE ACCIÓN PARA ESTE SEMESTRE QUE INICIA.</h5>
						<h6>A. PLAN DE ACCIÓN TUTORIAL</h6>  

						1.	¿Qué alternativas sugiere el tutelado para atender la problemática de las materias  reprobadas?<br>
						 <input id="name" type="text">
						 <br>
						 2.	¿Qué acciones sugiere el tutelado para elevar el promedio escolar?<br>
						<input id="name" type="text"><br>
						3.	¿Qué recomendaciones sugiere el Tutor sobre el diseño de ruta de materias pendientes de aprobar para elevar el aprovechamiento académico o para solicitar algún curso o taller para cubrir tales necesidades?
						<input id="name" type="text"><br>
						4.	¿Qué talleres o cursos  se sugieren para apoyar al estudiante?<br>
						<input id="name" type="text">
						<h6>Nota: si es alumno de 2° a 4° semestre continuar hasta el nombre y firma del Estudiante y Tutor</h6><br>
						<h5>III. EXPECTATIVAS. (Sólo para estudiantes de 5º a 9º semestre)</h5>
						a) Los semestres cursados  ¿Te permiten confirmar tus expectativas sobre la carrera?<br>
						Si <input type=radio name="pregunta" value="Si"> No <input type=radio name="pregunta" value="No">
						Parcialmente <input type=radio name="oregunta" value="parcial"><br>
                        ¿Por qué? <input type=text name="pregunta1form1"><br><br>
                        b)  ¿Cuáles consideras que son actualmente algunos de los obstáculos en tus estudios?<br>
                         <input id="name" type="text"><br>
                        c. ¿Cuáles son las metas que van configurando tu Proyecto de Vida?<br>
                        <div class="row">
                            <div class="span2">
                                 Plazo
                            </div>
                            <div class="span3">
                                Personales
                            </div>
                            <div class="span3">
                                Profecionales
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="span2">
                                 Corto(Durante estos proximos 6 meses)
                            </div>
                            <div class="span3">
                               <input id="name" type="text">
                            </div>
                            <div class="span3">
                                <input id="name" type="text">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="span2">
                                 Mediano (1 año)
                            </div>
                            <div class="span3">
                               <input id="name" type="text">
                            </div>
                            <div class="span3">
                                <input id="name" type="text">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="span2">
                                 Largo (3 años)
                            </div>
                            <div class="span3">
                               <input id="name" type="text">
                            </div>
                            <div class="span3">
                                <input id="name" type="text">
                            </div>
                            
                        </div>
                        
                        <div class="row">
                        <div class="span6">
                           <p> Nombre y Firma del Estudiante____________________      </p> 
                        </div>
                        <div class="span6">
                          <p>Nombre y Firma del Profesor - Tutor____________________      </p>
                        </div>
                    </div>

                    <input type="submit" value="Guardar"> <button type="submit">Imprimir</button>

                        </form>
                 
            </div>
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