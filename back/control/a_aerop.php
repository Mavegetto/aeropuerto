<?php

require_once("..\model\connect.php");
require_once("..\model\aeropuerto.php");

function NewVuelos($nom,$usu,$eda,$bo,$asie,$vue){
    $con=new conexion();
    $aeropuerto=new aeropuerto($nom,$usu,$eda,$bo,$asie,$vue);
    $con->conectar();
    $con->envio($aeropuerto->Insertar());
    $con->desconectar();
}


?>