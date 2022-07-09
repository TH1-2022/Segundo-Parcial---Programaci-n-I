<?php 

require "utils/autoload.php";
require "Modelo.class.php";

    class PostModelo extends Modelo{
        public $Id;
        public $Autor;
        public $Cuerpo;
        public $FechaYHora;
        
        /*public $IpBaseDeDatos;
        public $NombreBaseDeDatos;
        public $UsuarioBaseDeDatos;
        public $PasswordBaseDeDatos;
        public $conexionBaseDeDatos*/

        public function CrearPost(){
            $sql = "INSERT INTO publicaciones (id, autor, cuerpo, fechaYHora) VALUES (
            '{$this -> Id}',
            '{$this -> Autor}',
            '{$this -> Cuerpo}',
            '{$this -> FechaYHora}'
            )";		
            $this -> conexion -> query($sql);
            if ($this -> conexion -> error) {
                throw new Exception("error en la creacion del post");
            }
        }
        
            public function EliminarPost(){
            $sql = "delete from publicaciones where id='{$this -> Id}'";		
            $this -> conexion -> query($sql);
            if ($this -> conexion -> error) {
                throw new Exception("error al borrar el post");
            }
        }
        
            public function ActualizaPost(){
            $sql = "update publicaciones set cuerpo = '{$this -> Cuerpo}', 
            fechaYHora = '{$this -> Cuerpo}'";		
            $this -> conexion -> query($sql);
            if ($this -> conexion -> error) {
                throw new Exception("error en la actualizacion del post");
                return false;
            }
            return true;
        }
    
        public function PaginadoPost($pagina){
    
            $PostPorPagina = 3
            $InicioPagina=($pagina-1)*$PostPorPagina;
            $sql = "SELECT autor,cuerpo,fechaYHora FROM publicaciones";
            $fila = array();
            $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
    
            $NumFilas = count($fila);
            $TotalPaginas=ceil($NumFilas/$PostPorPagina);
    
            return array($InicioPagina, $PostPorPagina,$TotalPaginas);
        } 
        
            public function PaginadoPostUsuario($pagina, $Autor){
    
            $PostPorPagina = 3;
            $InicioPagina=($pagina-1)*$PostPorPagina;
            $sql = "SELECT cuerpo,fechaYHora FROM publicaciones where autor = '{$Autor}'";
            $fila = array();
            $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
    
            $NumFilas = count($fila);
            $TotalPaginas=ceil($NumFilas/$PostPorPagina);
    
            return array($InicioPagina, $PostPorPagina,$TotalPaginas);
        } 
    
        public function ListarPost($InicioPagina, $PostPorPagina){
            
            $sql = "SELECT p.cuerpo, p.fechaYHora, u.username 
            FROM publicaciones p , usuario u 
            where p.autor=u.username
            order by p.fechaYHora 
            desc LIMIT $InicioPagina, $PostPorPagina";
            $fila = array();
            $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
                return $fila;
            }
            
    
            public function ObtienePost(){
            $Id = $this -> Id;
            $sql = "SELECT autor,cuerpo FROM publicaciones where id = {$Id}";
            $fila = array();
            $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
            foreach ($fila as $registro){
                return array($registro['Autor'], $registro['Cuerpo']);
                }
            
        } 
    
        }
    