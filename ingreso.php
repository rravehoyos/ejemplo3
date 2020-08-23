<?php
  include("conexion.php");
  $usuario=$_POST['usuario'];
  $clave=$_POST['clave'];
    $sql="SELECT * from usuarios where usuario='$usuario' and clave='$clave'";
    $result=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($result);
    if($row['usuario'] == $usuario && $row['clave'] == $clave){
        if($row['perfil'] == 1){
            header("location:consul.php");
        }
        if($row['perfil']==2){
            header("location:index.html");
        }
    }