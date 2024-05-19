<?php
require_once("..\model\connect.php");
require_once("..\model\aeropuerto.php");

    function Avion($$id_avion, $origen, $destino, $escala){
    $con=new conexion();
    $aeropuerto=new aeropuerto($id_avion, $origen, $destino, $escala);
    $con->conectar();
    $con->envio($aeropuerto->Insertar());
    $con->desconectar();
}
    function Datos(){
    $con=new conexion(); 
    $aeropuerto= new Viaje('','','','');
    $con->conectar();
    $=$con->registro($mas->Extraer());
    $datos='';
    $aerolinea=array();
   while($columna=mysqli_fetch_array($aerolinea)){
   
    extract($columna);
    $datos=array("id_avion"=>$columna['id_avion'],
                 "origen"=>$columna['origen'],
                 "destino"=>$columna['destino'],
                 "escala"=>$columna['escala'],
                
                );

                array_push($aerolinea,$datos);
  
}

   return $aerolinea;
}


?>