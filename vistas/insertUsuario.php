<?php 

    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        header('Location: 404.php');
        echo "404 Not found";    
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nombreCompleto = $_POST['nombreCompleto'];
    

    $conexion = new mysqli("127.0.0.1","root","Pablo51965944","BlogPost");

    $sql = "INSERT INTO usuario (username,complete_name, password)
    VALUES ('$username','$nombreCompleto','$password')";

    if($conexion -> query($sql) === TRUE )
        header("Location: login.php?exito=true");
    else 
        header("Location: login.php?exito=false");

