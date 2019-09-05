<!-- <h1>Bienvenido a mi web con MVC</h1> -->
<?php
    require_once 'autoload.php';
    require_once 'config/parameters.php';
    require_once 'views/layout/header.php';
    require_once 'views/layout/sidebar.php';



    function Error()
    {
        $error = new errorController();
        $error->index();
        // Este controller llama a la vista errror
        // ver ErrorController
    }
    // A esto se le llama controlador frontal
    // Se encarga de comprobar si los controladore o vista existen
    // La vaina es que se hace con parametros get, Se ve feo
    // Pero pues es una clase prueba (se mejora con .bhtaccess)

    if(isset($_GET['controller'])){
        // Usuario y usuario es lo mismo AQUI no es sensible
        $nombre_controlador = $_GET['controller'].'Controller';
    }
    elseif (!isset($_GET['controller']))
    {
        // Aqui verifica que el controlador exista
        // echo "La pagina que buscas no existe (La name controller por GET no esta en la url)";
        // exit();
        // Error();
        $nombre_controlador = 'UsuarioController';
        
    }

    if(@class_exists($nombre_controlador))
    {	
        // Ese arroba dice, no muestre errores de PHP
        // porque en la pantalla salen errorer de PHP

        $controlador = new $nombre_controlador();
        // El autoLoad se enviar cuando hago una instancia

        
        // echo "CONTROLADOR : ".get_class($controlador)."<br>";
        // Verifica que la clase exista y la accion exista
        // Mucho codigo ?? Solo con este if basta
        if(isset($_GET['action']) && method_exists($controlador, $_GET['action']))
        {
            // echo "ACCION : ".get_class($controlador)."<br>";
            $action = $_GET['action'];
            $controlador->$action();
        }
        elseif(!isset($_GET['action']) ){
            $controlador->index();
        }
        else
        {
            // echo "La pagina que buscas no existe (Accion No existe)";
            Error();
        }
    }
    else
    {
        Error();
    }

    require_once 'views/layout/footer.php';
