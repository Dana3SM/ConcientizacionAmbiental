<?php
include("conexion.php");


$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];
$correo=$_GET['correo'];
$pass=$_GET['pass'];
$pass2=$_GET['pass2'];
$tipo=$_GET['tipo'];


$sql="INSERT INTO usuario (nombre, apellido, correo, contraseña, tipo) VALUES('$nombres','$apellidos','$correo','$pass', '$tipo')";

if($conn->query($sql)===TRUE){
   echo("usuario registrado con éxito"); 
}else{
   echo("Error al crear usuario:".$conn->connect_error); 
}
$conn->close();

?>

