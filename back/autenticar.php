<?php
session_start();
$usuario=$_POST['correo'];
$password=$_POST['clave'];
$token=mysqli_connect("");

$tabla=mysqli_query($token,"select * from usuarios where correo='$usuario' and clave='$password'");

$numerodatos=mysqli_num_rows($tabla);

if($numerodatos>0){
    $_SESSION["usuario"]=$usuario;
header('location:connect.php');
}else{
    header('location:index.html');
}



?>
