<?php

class Vuelo {
    private $id_avion;
    private $origen;
    private $destino;
    private $escala;
  

    
    public function __construct($id_avion, $origen, $destino, $escala) {
        $this->origen = $origen;
        $this->destino = $destino;
        $this->origen = $escala
        $this->avion = $avion;
    }

    public function insertar(){
        return CALL insertarVuelo('origen', 'destino', 'escala', id_avion);
    }

    public function extraer(){
        return "INSERT* FROM vuelo";
    }
}

?>
