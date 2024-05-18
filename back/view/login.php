<?php

require_once("..\controller\a_aerop.php");

 header("HTTP//1.1 200");
 header("Content-Type:application/json; charset:UFT-8");

 if($_SERVER['REQUEST_METHOD']=="POST"){
    Aeropuerto($_POST['nom'],$_POST['ape'],$_POST['eda'],$_POST['nbo'],$_POST['asie'],$_POST['vue']
   
   );
 };

 ?>
