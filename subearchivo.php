<?php 

//compruebo si las características del archivo son las que deseo 
if ($_FILES['archivo']["error"] > 0)
  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
  {
    $nombre=$_FILES['archivo']['name'];
    echo $nombre;
  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
  move_uploaded_file($_FILES['archivo']['tmp_name'],"Subidos/" ."$nombre");
   }
   header("Location:prueba.php?n=$nombre");
?>