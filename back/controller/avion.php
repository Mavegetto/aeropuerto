<?php
require_once("..\model\connect.php");
require_once("..\model\aeropuerto.php");

    function Avion($no_avion,$nombre,$id_aeropuerto){
    $con=new conexion();
    $aeropuerto=new aeropuerto($no_avion,$nombre,$id_aeropuerto);
    $con->conectar();
    $con->envio($aeropuerto->Insertar());
    $con->desconectar();
}
    function Datos(){
    $con=new conexion(); 
    $aeropuerto= new Viaje('','','');
    $con->conectar();
    $=$con->registro($mas->Extraer());
    $datos='';
    $aerolinea=array();
   while($columna=mysqli_fetch_array($aerolinea)){
   
    extract($columna);
    $datos=array("id_aeropuerto"=>$columna['id_aeropuerto'],
                 "nombre"=>$columna['nombre'],
                 "no_avion"=>$columna['no_avion'],
                
                );

                array_push($aerolinea,$datos);
  
}

   return $aerolinea;
}


?>