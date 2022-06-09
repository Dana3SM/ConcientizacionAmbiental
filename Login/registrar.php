<?php


//Variables de conexion de base de datos
include("conexion.php");    

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}


if (($_POST['register']).checked()) {
	alert("se presionó el botón");
if($("#user").checked){
$tipo=2;

}
if($("#admi").checked){
$tipo=1;

}


if(strlen($_POST['nombres'])>0 && strlen($_POST['apellidos'])>0 && strlen($_POST['correo'])>0 && strlen($_POST['pass'])>0 &&strlen($_POST['pass2'])>0){

$nombres=trim($_POST['nombres']);
$apellidos=trim($_POST['apellidos']);
$correo=trim($_POST['correo']);
$pass=trim($_POST['pass']);
$pass2=trim($_POST['pass2']);

if($pass==$pass2){



$consulta="INSERT INTO usuario(nombre, apellido, correo, contraseña, tipo) VALUES ('$nombres','$apellidos','$correo','$pass','$tipo')";
$resultado=mysql_query($conex,$consulta)
if($resultado){
?>
<h3 class="ok">Registro exitoso</h3>

<?php
alert("Registro exitoso");
}
else{

	?>
<h3 class="bad">Ha ocurrido un error en el registro</h3>
	<?php
	alert("Error");
}



}
else{

	alert("las contraseñas no coinciden");
}


}
else{
?>
<h3 class="bad">Por favor completa todos los campos</h3>
	<?php
alert("Completa los campos");
}

}


?>