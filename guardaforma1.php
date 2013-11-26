<?php
include("conexion.php");
 echo $nombreEstudiante= utf8_decode($_POST['nombreEstudiante']);
 echo $matricula=$_POST['matricula'];
echo $carrera=$_POST['carrera'];
echo $semestre=$_POST['semestre'];
echo $grupo=$_POST['grupo'];
echo $fecha=$_POST['fecha'];
echo "<br>";
echo $materia1= utf8_decode($_POST['m1']);
echo $final1=$_POST['f1'];
echo $status1=$_POST['s1'];
echo $dificultad1=$_POST['dificultad1'];
echo $preferencia1=$_POST['preferencia1'];
echo $tiempo1=$_POST['tiempo1'];
echo "<br>";

echo $materia2= utf8_decode($_POST['m2']);
echo $final2=$_POST['f2'];
echo $status2=$_POST['s2'];
echo $dificultad2=$_POST['dificultad2'];
echo $preferencia2=$_POST['preferencia2'];
echo $tiempo2=$_POST['tiempo2'];
echo "<br>";

echo $materia3= utf8_decode($_POST['m3']);
echo $final3= $_POST['f3'];
echo $status3=$_POST['s3'];
echo $dificultad3=$_POST['dificultad3'];
echo $preferencia3=$_POST['preferencia3'];
echo $tiempo3=$_POST['tiempo3'];

echo "<br>";
echo $materia4= utf8_decode($_POST['m4']);
echo $final4=$_POST['f4'];
echo $status4=$_POST['s4'];
echo $dificultad4=$_POST['dificultad4'];
echo $preferencia4=$_POST['preferencia4'];
echo $tiempo4=$_POST['tiempo4'];
echo "<br>";
echo $materia5= utf8_decode($_POST['m5']);
echo $final5=$_POST['f5'];
echo $status5=$_POST['s5'];
echo $dificultad5=$_POST['dificultad5'];
echo $preferencia5=$_POST['preferencia5'];
echo $tiempo5=$_POST['tiempo5'];
echo "<br>";
echo $materia6= utf8_decode($_POST['m6']);
echo $final6=$_POST['f6'];
echo $status6=$_POST['s6'];
echo $dificultad6=$_POST['dificultad6'];
echo $preferencia6=$_POST['preferencia6'];
echo $tiempo6=$_POST['tiempo6'];
echo "<br>";
echo $materia7= utf8_decode($_POST['m7']);
echo $final7=$_POST['f7'];
echo $status7=$_POST['s7'];
echo $dificultad7=$_POST['dificultad7'];
echo $preferencia7=$_POST['preferencia7'];
echo $tiempo7=$_POST['tiempo7'];

echo "<br>";
echo $promedio=$_POST['promedio'];

//cuestionario 
echo "<br>";
echo $calobt=$_POST['calobt'];
echo "<br>";
echo $porquecalobt=$_POST['porquecalobt'];
echo "<br>";
echo $rendimiento1=$_POST['rendimiento1'];
echo "<br>";
/*echo $=$_POST[''];
echo "<br>";
echo $=$_POST[''];


*/


 //$consulta =mysql_query("INSERT INTO  semestre_anterior(Semestre_Anterior) values ('$periodo')");
 //header("Location:carga-alumnos.php");
?>