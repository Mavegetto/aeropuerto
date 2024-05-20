<?php
require_once("..\model\conexion.php");
require_once("..\model\asint.php");

    function Aeropuerto($no_asi, $posicion, $id_avion){
    $con=new conexion();
    $aeropuerto=new aeropuerto($no_asi, $posicion, $id_avion);
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
    $datos=array("id_avion"=>$columna['id_avion'],
                 "no_asiento"=>$columna['no_asiento'],
                 "posicion"=>$columna['posicion'],
                
                );

                array_push($aerolinea,$datos);
  
}

   return $aerolinea;
}


?>