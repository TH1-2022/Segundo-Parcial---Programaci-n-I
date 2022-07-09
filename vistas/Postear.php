<?php

    if (!isset($_SESSION['autenticado']))
    header("Location: /Sesion.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>
</head>

<body>
    <h2>Ingrese que quiere publicar</h2>
    <form action="postear.php" method="post">

        <textarea name="cuerpo" rows="5" cols="30"></textarea></br>
        <input type="submit" value="Postear"></br></br>
        <a href="Sesion.php">Volver</a>
        
    </form>

</body>

</html>