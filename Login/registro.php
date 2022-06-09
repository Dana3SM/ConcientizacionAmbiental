<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/registro.css">



  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <form method="get" action="registrarPrueba.php" >
      
        <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="pass" id="pass" placeholder="Ingrese su Contraseña">
    <input class="controls" type="password" name="pass2" id="pass2" placeholder="Confirmar Contraseña">
    <label for=" tipo" class="controls"> Tipo</label><br><br>
    <label for="user">Usuario</label>
    <input  type="radio" name="tipo" id="user" value="2" checked >
    <label for=" admi">Administrador</label>
     <input  type="radio" name="tipo" value="1" id="admi">
    
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar" name="register">
    <p><a href="login.php">¿Ya tengo Cuenta?</a></p>

    </form>
  
  </section>



</body>
</html>
