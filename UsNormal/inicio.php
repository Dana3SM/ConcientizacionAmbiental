<!DOCTYPE html>
<html lang="en">
<LINK REL= StyleSheet HREF="css/inicio.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="funciones.js"></script>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuario</title> 

	
</head>

<header>
	<div id="editPer">
		<nav>
				<a id ="editar" href="editPerfil.php">Editar Perfil</a>
				<br>
				<img src="usuario.jpg">

		</nav>
	</div>
<form class="" id="barra">
	

	<input id="buscar" type="search" name="buscar">
	<input for="buscar" type="submit" value="Buscar">

</form><br>
	Esto es lo que dicen los científicos: el cambio climático llega antes y más fuerte de lo previsto<br>





</header>



<body>
<br>
<div id="subtitulo">
	<p>
		¿Cúal es la situación según los científicos? <br>
		El clima global
	</p>
</div>
<div id="izquierda"> 
	<p>La temperatura global promedio para 2015-2019 está en camino de ser la más cálida de cualquier otro período equivalente registrado. Actualmente se estima en 1,1° C, un grado más por encima de los tiempos preindustriales (1850–1900).

Las olas de calor en los últimos años han sido las más letales, afectaron a todos los continentes y establecieron registros récord de temperatura a nivel nacional.

Las olas de calor generalizadas y duraderas, los incendios récord y otros eventos devastadores como los ciclones tropicales, las inundaciones y la sequía han tenido un gran impacto en el desarrollo socioeconómico y el medio ambiente.</p>
</div>

<div id="derecha"><img src="medio.jpg"/></div>




</body>

<footer>
	
	<form id="seccionComentarios" method="get" action="comentarios.php">
	<label for="cometario">Comentarios:  </label>
	<textarea id="comentario" name="comentario" ></textarea>
<br>
	<button type="button" id="enviarC" > Enviar Comentario</button>

</form>
</footer> 
 
</html>