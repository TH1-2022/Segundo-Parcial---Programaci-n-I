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
    <h1>Creacion de usuario</h1>
    
    <form action="insertUsuario.php" method="post">
        UserName <input type="text" name="username"> <br />
        Password <input type="password" name="password"> <br />
        Nombre Completo <input type="text" name="nombreCompleto"> <br />
        <input type="submit" value="Crear Usuario">
    </form>

    
</body>
</html>