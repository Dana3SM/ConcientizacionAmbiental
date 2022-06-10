<?php
session_start();

$usuario = $_GET["correo"];
$passwd = $_GET["contraseña"];

//Aquí estan las variables de conexion
include("conexion.php");    

//Establecer conexion
$conn = new mysqli($servidor, $user, $password, $bd);


if($conn->connect_error){
    die("Error: ". $conn->connect_error);
}

$sql= "SELECT COUNT(*) FROM usuario WHERE correo='".$usuario."' and contraseña('".$passwd."')";

$cursor = $conn->query($sql);

//$registros =$cursor->num_rows;






if($cursor == 1){
  

$sql2="SELECT tipo FROM usuario WHERE correo='".$usuario."' and contraseña'".$passwd."'";
$datos = $conn->query($sql2);





if($tipo==1){
  
  header("Location: Admin/publicar.php");
}
if($tipo==2){
 
  header("Location: UsNormal/inicio.php");
}

}else{
    header("Location: index.php");
}



$conn->close();
?>