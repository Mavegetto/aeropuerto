<?php

require_once("..\model\connect.php");
require_once("..\model\aeropuerto.php");

function NuevosVuelos($nom,$ape,$eda,$nbo,$asie,$vue){
    $con=new conexion();
    $aeropuerto=new aeropuerto($nom,$ape,$eda,$nbo,$asie,$vue);
    $con->conectar();
    $con->envio($aeropuerto->Insertar());
    $con->desconectar();
}

?>