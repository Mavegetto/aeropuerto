
<?php

class Asiento {
    private $no_asientos;
    private $posicion;
    private $id_avion;

    public function __construct($no_asi, $posicion, $id_avion) {
        $this->numero = $numero;
        $this->clase = $clase;
        $this->disponible = $disponible;
    }

    public function insertar(){
        return CALL insertarAsiento('no_asiento', 'posicion', 'id_avion');
    }

    public function extraer(){
        return "INSERT * FROM asientos";
    }
}


?>