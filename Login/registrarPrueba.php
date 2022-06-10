<?php
include("conexion.php");
   

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];
$correo=$_GET['correo'];
$pass=$_GET['pass'];
$pass2=$_GET['pass2'];
$tipo=$_GET['tipo'];





$sql2= 'SELECT * FROM usuario WHERE correo="'.$correo.'"';
$registros = $conn->query($sql2);
$coincidencias = $registros->num_rows;


if($coincidencias>=1){

echo("ya existe este correo");



$conn->close();
}


else{
    
if($pass==$pass2){


$sql="INSERT INTO usuario (nombre, apellido, correo, contraseña, tipo) VALUES('$nombres','$apellidos','$correo','$pass', '$tipo')";

if($conn->query($sql)===TRUE){
   ?>
<h3> Registro exitoso</h3>
<?php
}else{
   echo("Error al crear usuario:".$conn->connect_error); 
}


}
else{

?>
<h3> Las contraseñas no coinciden</h3>
<?php
   
}

$conn->close();
}


?>