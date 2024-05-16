
<?php

class Usuario {
    private $nombre;
    private $apellido;
    private $edad;
    private $npasaporte;
    private $pais;
    private $direccion;
    private $telefono;
    private $email;
    private $clave;

    public function __construct($nombre, $apellido, $edad, $npasaporte, $pais, $dirrec, $telefono, $email,$clave) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->npasaporte = $npasaporte;
        $this->pais = $pais;
        $this->dirreccion = $dirrec;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->clave = $clave;
    }

    
}
?>