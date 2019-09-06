<?php

require_once 'models\usuario.php';

class UsuarioController
{
    public function index()
    {
        // echo "Soy usuario controller";

        require_once 'views/producto/destacados.php';
    }

    public function registro()
    {
        require_once 'views/usuario/registro.php';    
    }

    public function save()
    {
        if(isset($_POST))
        {
            $usuario =  new Usuario();
            
            // Aqui se puede hacer validacion de todos
            // los campos, LO VOY A OMITIR, porque 
            // me da pereza hacer esto en un aprendizaje
            
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $registro = $usuario->save();

            if($registro)
            {
                $_SESSION['register'] = "success";
            }
            else
            {
                $_SESSION['register'] = "error";
            }
        }
        else
        {
            $_SESSION['register'] = "error";
        }
        header('Location:'.base_url.'usuario/registro');
    }

    public function login()
    {   
        if(isset($_POST))
        {
            // Identificar al Usuario 

            // Consultar a la base de datos

            // Crear una Session
        
            $userlogin = new Usuario();
            
            $identity = $userlogin->login($_POST['email'],$_POST['password']);

            if(is_object($identity) && $identity)
            {
                $_SESSION['identity'] = $identity;

                if($identity->rol == 'admin')
                {
                    $_SESSION['admin'] = true; 
                }
            }
            else
            {
                $_SESSION['error_login'] = true;
            }
            
        }
        else
        {
            $_SESSION['error_login'] = true;
        }
        header('Location:'.base_url);
    }

    public function logout()
    {
        if(isset($_SESSION['identity']))
        {
            Utils::DeleteSession('identity');
        }
        if(isset($_SESSION['admin']))
        {
            Utils::DeleteSession('admin');
        }
        
        header("Location:".base_url);
    }
}