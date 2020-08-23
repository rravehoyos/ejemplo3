<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <center>
    <div>
        <h1>LOGIN</h1>
        <form action="ingreso.php" method="POST">
            <input type="text" name="usuario" placeholder="Digite su usuario" required>
            <input type="password" name="clave" placeholder="Digite su contraseña" required><br><br>
            <input type="submit" name="enviar" value="Ingresar">
        </form>
    </div>
    </center>
</body>
</html>