<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="consulta.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
    <center>
    <div>
        <table>
            <thead> 
                <th colspan="7">INFORMACIÓN DE LOS PRODUCTOS</th>
            </thead>
            <tr>
                <td>ID</td>
                <td>IMAGEN</td>
                <td>NOMBRE</td>
                <td>PRECIO</td>
                <td>STOCK</td>
                <td>MODIFICAR</td>
                <td>ELIMINAR</td>
            </tr>
            <?php 
                $sql="SELECT*FROM tienda";
                $resultado=mysqli_query($conexion, $sql);
                while($row=mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?> " width="100px" heigth="100px"></td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['precio'] ?></td>
                <td><?php echo $row['stock'] ?></td>
                <td><a href="modificar.php?id=<?php $row['id']; ?>"><input type="button" value="Modificar"></a></td>
                <td><a href="eliminar.php"><input type="button" value="Eliminar"></a></td>
            </tr>
            <?php 
                }
            ?>         
        </table>
    </div>
    </center>
</body>
</html>