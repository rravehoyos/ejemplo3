<?php
include("conexion.php");
    $id=$_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
</head>
<body>
    <div>
        <h1>Compra</h1>
        <table>
            <thead >
                <th colspan="2">INFORMACIÓN</th>
            </thead>
            <tr>
                <td>NOMBRE</td>
                <td>PRECIO</td>
            </tr>
            <?php
                $sql="SELECT*FROM tienda where id='$id'";
                $resultado=mysqli_query($conexion, $sql);
                while($row=mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['precio'] ?></td>
            </tr>
        </table>  
            <form action="comprar.php? id= <?php echo $row['id']; ?>" method="POST"> 
                <label >Unidades a comprar:</label>
                <input type="text" name="unidades" required>
                <input type="submit" name="calcular" value="CALCULAR"><br>
                <?php
                if (isset($_POST['calcular'])){
                $unidades=$_POST['unidades'];
                $total = $row['precio'] * $unidades;
                ?>
                <h2><?php echo $total ?></h2>
                <?php
                }
                ?>
                <input type="submit" name="comprar" value="COMPRAR">
            </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['comprar'])){
    $unidades=$_POST['unidades'];
    if($unidades > $row['stock']){
        ?>
        <script>    alert('no hay esa cantidad disponible') </script>
    <?php
    }
    else{
        $newStock = $row['stock'] - $unidades;
        $actualizar="UPDATE tienda SET stock = '$newStock' WHERE id = '$id'";
        $result=mysqli_query($conexion,$actualizar);
        header("location:consul.php");
    }
}
}
?>