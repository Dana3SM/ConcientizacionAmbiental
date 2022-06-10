<?php
include("conexion.php");
include("registrarPrueba.php")   

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$comentarios=$_GET['comentario'];

$sql2= 'SELECT id FROM usuario WHERE correo="'.$correo.'"';
$datos = $conn->query($sql2);
$dato = mysqli_fetch_array($datos, MYSQLI_NUM);
$idUser=dato[0];

$sql="INSERT INTO comentarios(comentario, idUsuario) VALUES('$comentarios','$idUser')";

if($conn->query($sql)===TRUE){
   ?>
<h3> Registro exitoso</h3>
<?php
}else{
   echo("Error al crear usuario:".$conn->connect_error); 
}

?>