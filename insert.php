<?php
include("conexion.php");
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $nombre=$_POST['nombre'];
  $precio=$_POST['precio'];
  $stock=$_POST['stock'];

  $insert="INSERT into tienda(id,imagen,nombre,precio,stock) VALUES (NULL,'$imagen','$nombre','$precio','$stock')";
  $resultado=mysqli_query($conexion,$insert);
  header("location:insertar.html");
?>