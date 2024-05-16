
<?php

class Asiento {
    private $numero;
    private $clase;
    private $disponible;

    public function __construct($numero, $clase, $disponible) {
        $this->numero = $numero;
        $this->clase = $clase;
        $this->disponible = $disponible;
    }


}
?>