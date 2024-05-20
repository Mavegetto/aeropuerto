<?php

require_once("..\controller\a_aerop.php");

 header("HTTP//1.1 200");
 header("Content-Type:application/json; charset:UFT-8");

 if($_SERVER['REQUEST_METHOD']=="POST"){
   Usuarios($_POST['nom'],$_POST['eda'],$_POST['npasa'],$_POST['pais'],$_POST['dirrec'],$_POST['tel'],$_POST['ema'],$_POST['cla']
   
   );
 };

 if($_SERVER['REQUEST_METHOD']=="GET"){
    echo json_encode(Datos());
 }

 ?>
