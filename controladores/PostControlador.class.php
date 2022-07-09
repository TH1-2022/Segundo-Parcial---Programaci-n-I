<?php

require 'modelos/PostModelo.Class.php';	

class PostControlador{

	public static function AltaPost($Autor, $Cuerpo, $FechaYHora){

		try {
			$post = new PostModelo();
			$post -> Autor = $Autor;
			$post -> Cuerpo = $Cuerpo;
			$post -> FechaYHora = $FechaYHora;
			$post -> CrearPost();
			return true;

		} catch (Exception $e) {

			return $e -> getMessage();

		}
	}
	
	public static function EliminarPost($Id){

		try {
			$post = new PostModelo();
			$post -> id = $Id;
			$post -> EliminarPost();
			return true;

		} catch (Exception $e) {

			return $e -> getMessage();

		}
	}
	
	public static function ActualizaPost($Id, $Autor, $Cuerpo, $FechaYHora){

		try {
			$post = new PostModelo();
			$post -> Id = $Id;
			$post -> Autor = $Autor;
			$post -> Cuerpo = $Cuerpo;
			$post -> FechaYHora = $FechaYHora;
			$post -> ActualizaPost();
			return true;

		} catch (Exception $e) {

			return $e -> getMessage();

		}
	}
	
	public static function ListadoPost($InicioPagina, $PostPorPagina){

		$p = new PostModelo();
		$p->InicioPagina = $InicioPagina;
		$p->PostPorPagina = $PostPorPagina;
		return $p -> ListarPost($InicioPagina, $PostPorPagina);

	}
	

	}
	
	public static function ListadoPostUsuario($InicioPagina, $PostPorPagina, $Autor){

		$p = new PostModelo();
		$p->InicioPagina = $InicioPagina;
		$p->PostPorPagina = $PostPorPagina;
		$p->Autor = $Autor;
		return $p -> ListarPostUsuario($InicioPagina, $PostPorPagina, $Autor);

	}
	
	public static function PaginadoPost($pagina){

		$p = new PostModelo();
		$p->pagina = $pagina;
		return $p -> PaginadoPost($pagina);

	}
	
	
	public static function PaginadoPostUsuario($pagina, $Autor){

		$p = new PostModelo();
		$p->pagina = $pagina;
		$p->Autor = $Autor;
		return $p -> PaginadoPostUsuario($pagina,$Autor);

	}
	
	public static function ObtienePost($Id){

		$p = new PostModelo();
		$p->Id = $Id;
		return $p -> ObtienePost();

	}
}
