<?php 

require '../Controladores/SesionControlador.class.php';
	$intentoLogueo = SesionControlador::IniciarSesion($_POST['username'],$_POST['password']);
	
	if (empty($intentoLogueo))
	{
		echo "<script>alert('Usuario no existe o password errado');window.history.back()</script>";
	}else{
		session_start();
			$_SESSION["username"]=$_POST['username'];
		header("Location: Sesion.php");
	}