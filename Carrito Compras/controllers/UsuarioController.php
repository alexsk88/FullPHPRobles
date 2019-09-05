<?php 

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
            var_dump($_POST);
        }
    }
}