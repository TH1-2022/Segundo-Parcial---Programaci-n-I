<?php 
    require "../utils/autoload.php";

     if(isset($_SESSION['autenticado']))
        header("Location: /");
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
    
    <h1>Bienvenido</h1>

        <h3>Para Modificar sus datos, clique en <a href="modificarUsuario.php?">Modificar</a></h3>


    <?php if(isset($_GET['modificado']) && $_GET['modificado'] === "true" ) :?>
        <div style="color: green;">La modificacion de datos fue correctamente realizada</div>
    <?php endif;?>



    <a href="../index.html">Volver</a></br>
</body>
</html>