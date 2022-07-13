<?php
include("../Controladores/conexionBaseDatos.php");
session_start();

$publicacion = $_POST['publicacion'];
$nombreCompleto = $_SESSION['complete_name'];

$insertarPublicacion = "INSERT INTO `publicacion`(`autor`, `texto`, `fecha`) VALUES ('$nombreCompleto', '$publicacion', now())";
$resultado = mysqli_query($conexion, $insertarPublicacion);

if ($resultado) {
    echo "<script>alert('Se ingreso la publicacion de forma correcta');window.location='../index.php';</script>";
} else {
    echo "<script>alert('Ups, no se pudo publicar');window.location='../index.php';</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
