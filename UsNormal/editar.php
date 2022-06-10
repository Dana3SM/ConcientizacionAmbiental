<?php
include("conexion.php");
   

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$nombres=$_GET['nombre'];
$correo=$_GET['correo'];
$apellidos=$_GET['apellido'];
$pass=$_GET['contraseña'];
$pass2=$_GET['confirmar'];

$sql2= 'SELECT * FROM usuario WHERE correo="'.$correo.'"';
$registros = $conn->query($sql2);
$coincidencias = $registros->num_rows;

if($coincidencias==1){


if($pass==$pass2){


$sql="UPDATE usuario set nombre='$nombres', apellido='$apellidos',contraseña='$pass' where correo='$correo'";

if($conn->query($sql)===TRUE){
   ?>
<h3> Cambios guardads</h3>
<?php
}else{
   echo("Error al hacer los cambios:".$conn->connect_error); 
}


}
else{

?>
<h3> Las contraseñas no coinciden</h3>
<?php
   
}

$conn->close();


}

else{
 echo("este correo no existe");

}

?>


