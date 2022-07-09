<?php 


    $conexion = new mysqli("127.0.0.1","root","Pablo51965944","BlogPost");
    $resultado = $conexion -> query($sql)  -> fetch_all(MYSQLI_ASSOC)[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Modificar Usuario</h1>

<form action="modificadorUsuario.php" method="post">
        Username: <input type="text" name="username" value="<?= $resultado['username'] ?>" > <br />
        Contraseña: <input type="text" name="password" value="<?= $resultado['password'] ?>" > <br />
        Nombre Completo: <input type="text" name="complete_name" value="<?= $resultado['complete_name'] ?>" > <br />

        <input type="submit" value="Enviar">
    </form>

    <a href="../index.html">Volver</a></br>
</body>
</html>