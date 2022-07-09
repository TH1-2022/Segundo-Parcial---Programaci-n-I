<?php
	require 'controladores/PostControlador.class.php';

	if(isset($_GET["pagina"])){

		if ($_GET["pagina"]==1){
			header("Location:../index.php");
		}else{
			$pagina=$_GET["pagina"];
		}
	}else{
		$pagina=1;
	}

	list($InicioPagina, $PostPorPagina ,$TotalPaginas)	= PostControlador::PaginadoPost($pagina);


	foreach ( PostControlador::ListadoPost($InicioPagina, $PostPorPagina) as $fila){

	echo "<h3>" . $fila['Autor'] ."</h3> ". "</a> "." - " . $fila['Cuerpo'] ." ++++ "."<br>";
	echo "<hr/>";

	}
	
	for($i=1;$i<=$TotalPaginas;$i++){
			echo "<a href='?pagina=". $i ."'> ". $i . "</a>";
	}