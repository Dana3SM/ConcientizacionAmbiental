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

$sql= "SELECT COUNT(*) FROM usuarios WHERE correo='".$usuario."' and contraseña('".$passwd."')";

$cursor = $conn->query($sql);

//$registros =$cursor->num_rows;






if($cursor == 1){
  

$sql2="SELECT tipo FROM usuarios WHERE correo='".$usuario."' and contraseña('".$passwd."')";
$datos = mysqli_query($conexion, $sql);




if($tipo==1){
  
  header("Location: https://concienciambiental.000webhostapp.com/Admin/publicar.php");
}
if($tipo==2){
 
  header("Location: https://concienciambiental.000webhostapp.com/UsNormal/inicio.php");
}

}else{
    header("Location: https://concienciambiental.000webhostapp.com/index.php");
}



$conn->close();
?>