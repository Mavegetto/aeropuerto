<?php

require_once("..\controller\a_aerop.php");

 header("HTTP//1.1 200");
 header("Content-Type:application/json; charset:UFT-8");

 if($_SERVER['REQUEST_METHOD']=="POST"){
   Avion($_POST['no_avi'],$_POST['nombre'],$_POST['id_aero']
   
   );
 };

 if($_SERVER['REQUEST_METHOD']=="GET"){
    echo json_encode(Datos());
 }

 ?>
