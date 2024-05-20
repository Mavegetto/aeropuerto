<?php
require_once("..\model\conexion.php");
require_once("..\model\aeropue.php");


    function Aeropuerto($nombre, $direccion, $pais){
    $con=new conexion();
    $aeropuerto=new aeropuerto($nombre, $direccion, $pais);
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
    $datos=array("direccion"=>$columna['direccion'],
                 "nombre"=>$columna['nombre'],
                 "pais"=>$columna['pais'],
                
                );

                array_push($aerolinea,$datos);
  
}

   return $aerolinea;
}


?>