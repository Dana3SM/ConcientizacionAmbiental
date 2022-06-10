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

//$sql= 'SELECT COUNT(*) FROM usuario WHERE correo="'.$usuario.'" and contraseña="'.$passwd.'" ';
//$cursor = $conn->query($sql);

$sql= 'SELECT * FROM usuario WHERE correo="'.$usuario.'" and contraseña="'.$passwd.'" ';
$registros = $conn->query($sql);
$cursor = $registros->num_rows;

if($cursor == 1){
  
$sql2= 'SELECT tipo FROM usuario WHERE correo="'.$usuario.'" and contraseña="'.$passwd.'" ';

$datos = $conn->query($sql2);
$dato = mysqli_fetch_array($datos, MYSQLI_NUM);


if($dato[0]==1){
  
  header('Location: https://concienciambiental.000webhostapp.com/Admin/publicar.php');
}
if($dato[0]==2){
 
  header('Location: https://concienciambiental.000webhostapp.com/UsNormal/inicio.php');
}

}

else{
    header('Location:login.php');
    echo('el usuario no se encuentra');
}

$conn->close();



?>