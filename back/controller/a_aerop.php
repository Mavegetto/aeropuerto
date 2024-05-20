<?php
require_once("..\model\conexion.php");
require_once("..\model\aeropuerto.php");

    function Vuelos($nom,$usu,$eda,$nbo,$asie,$vue){
    $con=new conexion();
    $aeropuerto=new aeropuerto($nom,$usu,$eda,$bo,$asie,$vue);
    $con->conectar();
    $con->envio($aeropuerto->Insertar());
    $con->desconectar();
}
    function Datos(){
    $con=new conexion(); 
    $aeropuerto= new Viaje('','','','','','');
    $con->conectar();
    $=$con->registro($mas->Extraer());
    $datos='';
    $aerolinea=array();
   while($columna=mysqli_fetch_array($aerolinea)){
   
    extract($columna);
    $datos=array("id"=>$columna['id'],
                 "nombre"=>$columna['nombre'],
                 "usuario"=>$columna['usuario'],
                 "edad"=>$columna['edad'],
                 "boleto"=>$columna['boleto']
                 "asientos"=>$columna['asientos'],
                 "vuelo"=>$columna['vuelo'],
                );

                array_push($aerolinea,$datos);
  
}

   return $aerolinea;
}


?>