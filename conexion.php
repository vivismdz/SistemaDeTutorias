
<?php
   $link=mysql_connect('localhost','root','')or die('Not connected:'.mysql_error($link));
   mysql_select_db('tutorias', $link) or die ('No me puedo conectar a la Base de Datos');
?>

