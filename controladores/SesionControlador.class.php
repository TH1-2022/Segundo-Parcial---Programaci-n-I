<?php 
    require "../utils/autoload.php";
    require "../modelos/UsuarioModelo.class.php";

    class SesionControlador {
        public static function IniciarSesion($context){
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            $u = new UsuarioModelo();
            $u -> Nombre = $context['post']['username'];
            $u -> Password = $context['post']['password'];
            if($u -> Autenticar($u -> Nombre, $u -> Password)){
                SessionCreate("autenticado",true);
                SessionCreate("nombreUsuario", $u -> Nombre);
                header("Location: /");

            }
            render("login",["error" => true]);
        }

        public static function CerrarSesion($context){
            session_destroy();
            header("Location:/login");
        }

       
    }

