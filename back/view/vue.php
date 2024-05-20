<?php

require_once("..\controller\vuelo.php");

 header("HTTP//1.1 200");
 header("Content-Type:application/json; charset:UFT-8");

 if($_SERVER['REQUEST_METHOD']=="POST"){
    Vuelos($_POST['id_avi'],$_POST['orig'],$_POST['dest'],$_POST['esc']
   
   );
 };

 if($_SERVER['REQUEST_METHOD']=="GET"){
    echo json_encode(Datos());
 }

 ?>
