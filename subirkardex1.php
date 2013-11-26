<?php 

//compruebo si las características del archivo son las que deseo 
if ($_FILES['kardex1']["error"] > 0)
  {
  echo "Error: " . $_FILES['kardex1']['error'] . "<br>";
  }
else
  {
    $nombre=$_FILES['kardex1']['name'];
    echo $nombre;
  echo "Nombre: " . $_FILES['kardex1']['name'] . "<br>";
  echo "Tipo: " . $_FILES['kardex1']['type'] . "<br>";
  echo "Tamaño: " . ($_FILES["kardex1"]["size"] / 1024) . " kB<br>";
  echo "Carpeta temporal: " . $_FILES['kardex1']['tmp_name'];
  move_uploaded_file($_FILES['kardex1']['tmp_name'],"Subidos/" ."$nombre");
   }
   header("Location:cargarkardex1.php?n=$nombre");
?>