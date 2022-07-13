<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>SimpleBlog</h1>

<body>
    <?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo 'Hola: ', $_SESSION['complete_name'];
    ?> <a href="Controladores/cerrarSession.php">Cerrar Sesion</a>
    <?php
    } else {
    ?>
        <a href="vistas/altaUsuario.php">Registrate</a>
        <a href="vistas/iniciarSesion.php">IniciarSesion</a><br>
    <?php
    }

    include("Controladores/conexionBaseDatos.php");
    $consulta = "SELECT * FROM publicacion";
    $resultado = mysqli_query($conexion, $consulta);

    while ($publicaciones = mysqli_fetch_array($resultado)) {
    ?>
        <h2>Autor: <?php echo $publicaciones["autor"]; ?> </h2>
        <p> <?php echo $publicaciones["texto"]; ?></p>
        <p>Fecha: <?php echo $publicaciones["fecha"]; ?> </p>
        <hr />
    <?php

    }
    if (isset($_SESSION['username'])) {
    ?>
        <form action="Controladores/registrarPublicacion.php" method="POST">
            <h2>Publicá lo que quieras</h2>
            <textarea name="publicacion" rows="10" cols="40">Escribe aquí tus comentarios</textarea><br>
            <button name="agregarUsuario">Agregar Usuario</button>
        </form>
    <?php
    }

    ?>

</body>

</html>