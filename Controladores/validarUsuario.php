<?php
include ("../Controladores/conexionBaseDatos.php");
session_start();

$usuario = $_POST['Usuario'];
$contrasena = $_POST['contrasena'];
$consulta="SELECT * FROM usuario WHERE username='$usuario' and pasword='$contrasena' ";
$resultado=mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
$nom = mysqli_fetch_assoc( $resultado );
$nombreUsuario= $nom['username'];
$nombreCompleto= $nom['complete_name'];

if($filas>0){
    $_SESSION['username']=$nombreUsuario;
    $_SESSION['complete_name']=$nombreCompleto;
    header("Location: ../index.php");

}else{
 
    echo "<script>alert('El usuario NO ESTA registrado');</script>";

}