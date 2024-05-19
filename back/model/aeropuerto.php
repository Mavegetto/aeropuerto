
<?php

class Aeropuerto {
    private $nombre;
    private $direccion;
    private $pais;

    public function __construct($nombre, $direccion, $pais) {
        $this->nombre = $nombre;
        $this->dirreccion = $dirreccion;
        $this->pais = $pais;
    }

    public function insertar(){
        return CALL insertarAsiento('no_asiento', 'posicion', 'id_avion');
    }

    public function extraer(){
        return "SELECT * FROM "
    }
}


?>