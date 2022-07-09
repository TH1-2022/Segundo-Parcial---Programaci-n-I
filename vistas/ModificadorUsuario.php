<?php 

    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        header('Location: 404.php');
        echo "404 Not found";    
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $complete_name = $_POST['complete_name'];



    $conexion = new mysqli("127.0.0.1","root","Pablo51965944","BlogPost");

    $sql = "UPDATE usuario SET 
        password = $password,
        complete_name = '$complete_name'
        WHERE username = $username";

    if($conexion -> query($sql) === TRUE )
        header("Location: ingresarPersona.php?modificado=true");
    else 
        header("Location: ingresarPersona.php?modificado=false");
