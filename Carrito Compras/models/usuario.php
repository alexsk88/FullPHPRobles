
<?php

class Usuario
{
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

	
    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getNombre()
    {
        return $this->nombre;
    }
 
    public function setNombre($nombre)
    {
        // Escapar carateres especiales en una cadena de texto, mejora el SQL
        // Mas limpio, por si sale algun error
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    public function getEmail()
    {
        return $this->email;
    }
 
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    public function getPassword()
    {
        // Cifrar SHA-1 

        $ecaparstring = $this->db->real_escape_string($this->password);
        $cifrado_pass = password_hash($ecaparstring , PASSWORD_BCRYPT, ['cost' => 4]);

        return  $cifrado_pass;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }


    // Metodos

    public function save()
    {
        $estado = false;

        $sql = "INSERT INTO usuarios VALUES (
         NULL,
        '{$this->getNombre()}' ,
        '{$this->getApellidos()}',
        '{$this->getEmail()}',
        '{$this->getPassword()}',
        'USER',
         NULL)";

        $save = $this->db->query($sql);
        
        if($save)
        {
            $estado =  true;
        }

        return $estado;
    }

    public function login($email, $password)
    {

        $estado =  false;

        // Comprobar si existe el User
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1)
        {
            // Primero hay que convertir el user a Object
            $user = $login->fetch_object();

            $verify = password_verify($password, $user->password);

            if($verify)
            {
                $estado =  $user;
            }
        }

        return $estado;
    }
}