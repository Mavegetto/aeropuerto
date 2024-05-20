<?php
class Boleta {
    private $hora;
   
    public function __construct($hora) {
        $this->hora = $hora;
     
    }

    public function extraer(){
        return "SELECT * FROM  boleta";
    }
   
}

?>

