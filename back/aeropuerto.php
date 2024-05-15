<?php
class aeropuerto{
    private $nombre;
    private $apellido;
    private $edad;
    private $nboleto;
    private $asientos;
    private $vuelos;
    

    public function __construct($nom,$ape,$eda,$nbo,$asie,$vue){
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->edad=$eda;
        $this->nboleto=$nbo;
        $this->asientos=$asie;
        $this->vuelos=$vue;
        
    }

    public function insertar(){
        return "INSERT INTO aeropuerto (nombre, apellido, edad, nboleto, asientos , vuelos ) VALUES ('$this->nombre', '$this->apellido', '$this->edad', '$this->nboleto', '$this->asientos', '$this->vuelos')";
    }

   
}

?>
