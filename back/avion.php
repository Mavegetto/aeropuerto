
<?php

class Avion {
    private $noleto;
    private $nombre;
    private $id_aeropuerto;

    public function __construct( $no_avion,$nombre,$id_aeropuerto) {
        $this->nboleto = $nboleto;
        $this->nombre = $nombre;
        $this->id_aeropuerto = $id_aeropuerto;

    }

    public function insertar(){
        return CALL insertarAvion('no_avion', 'nombre', id_aeropuerto);
    }

    public function extraer(){
        return "SELECT * FROM "
    }

}
?>

