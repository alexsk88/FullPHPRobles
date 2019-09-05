<?php 

class Utils
{
    public static function DeleteSession($namesession)
    {
        if(isset($_SESSION[$namesession]))
        {
            $_SESSION[$namesession] = null;
            unset($_SESSION[$namesession]);
        }

        return $namesession;
    }
}