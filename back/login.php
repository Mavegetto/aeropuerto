<?php 
echo $_POST['id'] . "<br>";
echo $_POST['nombre'] . "<br>";
echo $_POST['apellido'] . "<br>";
echo $_POST['edad'] . "<br>";
echo $_POST['npasaporte'] . "<br>";
echo $_POST['pais'] . "<br>";
echo $_POST['direccion'] . "<br>";
echo $_POST['telefono'] . "<br>";
echo $_POST['correo'] . "<br>";
echo $_POST['clave'] . "<br>";

$con=mysql_connect("");
$ins="";
mysqli_query($con,$ins);
header('location:index.html')
?>