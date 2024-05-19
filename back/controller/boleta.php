<?php
require_once("..\model\connect.php");
require_once("..\model\aeropuerto.php");

    function Aeropuerto($hora){
    $con=new conexion();
    $aeropuerto=new aeropuerto($hora);
    $con->conectar();
    $con->envio($aeropuerto->Insertar());
    $con->desconectar();
}
    function Datos(){
    $con=new conexion(); 
    $aeropuerto= new Viaje('');
    $con->conectar();
    $=$con->registro($mas->Extraer());
    $datos='';
    $aerolinea=array();
   while($columna=mysqli_fetch_array($aerolinea)){
   
    extract($columna);
    $datos=array("hora"=>$columna['hora']  

);

                array_push($aerolinea,$datos);
  
}

   return $aerolinea;
}


?>