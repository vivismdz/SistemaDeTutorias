<?php
include("conexion.php");
$periodo=$_POST['periodo'];
 $consulta =mysql_query("INSERT INTO  semestre_anterior(Semestre_Anterior) values ('$periodo')");
 header("Location:carga-alumnos.php");
?>