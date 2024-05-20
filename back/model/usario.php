<?php
class Usuario {
    private $nombre;
    private $edad;
    private $npasaporte;
    private $pais;
    private $direccion;
    private $telefono;
    private $email;
    private $clave;

    public function __construct($nombre, $edad, $npasaporte, $pais, $dirrec, $telefono, $email, $clave) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->npasaporte = $npasaporte;
        $this->pais = $pais;
        $this->dirreccion = $dirrec;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->clave = $clave;
    }

    public function insertar(){
        return CALL insertarAsiento('no_asiento', 'posicion', 'id_avion');
    }

    public function extraer(){
        return "SELECT * FROM usuarios";
    }
}


?>
