<?php
require_once("..\model\conexion.php");
require_once("..\model\usario.php");

    function Usuarios($nom,$eda,$npa,$pais,$dirrec,$tel,$ema,$cla){
    $con=new conexion();
    $aeropuerto=new aeropuerto($nom,$eda,$npa,$pais,$dirrec,$tel,$ema,$cla);
    $con->conectar();
    $con->envio($aeropuerto->Insertar());
    $con->desconectar();
}
    function Datos(){
    $con=new conexion(); 
    $aeropuerto= new Viaje('','','','','','','','');
    $con->conectar();
    $=$con->registro($mas->Extraer());
    $datos='';
    $aerolinea=array();
   while($columna=mysqli_fetch_array($aerolinea)){
   
    extract($columna);
    $datos=array(
                 "nombre"=>$columna['nombre'],
                 "edad"=>$columna['edad'],
                 "npasaporte"=>$columna['npasaporte'],
                 "pais"=>$columna['pais']
                 "direccion"=>$columna['direccion'],
                 "telefono"=>$columna['telefono'],
                 "email"=>$columna['email'],
                 "clave"=>$columna['clave'],
                );

                array_push($aerolinea,$datos);
  
}

   return $aerolinea;
}


?>