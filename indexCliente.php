<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" /> 
	<META NAME="Author" CONTENT="P. Steven Puerto Montaño, Juliana Diaz, Felix Moreno">
	<title>BancaUSA.com</title>
	<script type="text/javascript" src="ui/JS/java.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="ui/CSS/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="ui/CSS/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="ui/js/bootstrap.min.js"></script>

	<!--Icono-->
	<link rel="SHORTCUT ICON" href="ui\Img\Pestaña.png">

	<!--estilo-->
	<link rel="stylesheet" type= "text/css" href="ui\CSS\Style2.css">
	<script type="text/javascript" src="ui/JS/clock.js"></script>
</head>
<body>	
	<?php
		session_start();
	?>
	<div id = "head">
		</div>
		<div id = "menu">
			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="indexCliente.php"><img src="ui/Img/inicio.png" id="icons">&nbsp Inicio</a></li>
				<li role="presentation"><a href="miPerfil.php"><img src="ui/Img/perfil2.png" id="icons">&nbsp Mi Perfil</a></li>
		  		<li role="presentation"><a href="misCuentas.php"><img src="ui/Img/cuenta2.png" id="icons">&nbsp Mis Cuentas</a></li>
				<li role="presentation"><a href="resumen.php"><img src="ui/Img/movimientos2.png" id="icons">&nbsp Resumen de Movimientos</a></li>
				<li role="presentation"><a href="transferencias.php"><img src="ui/Img/transaccion2.png" id="icons">&nbsp Realizar Transacción</a></li>
				<li role="presentation"><a href="index.html"><img src="ui/Img/salir2.png" id="icons">&nbsp Cerrar Sesión</a></li>
				<li role="presentation" id="clockbox"></li>
			</ul>
		</div>
		<h3>&nbsp<img src="ui/Img/usuario.png" id="icons"> <?php echo "<span class='label label-info'>".$_SESSION['usuario']."</span>" ?></h3>
	<div id = "container">
		<div id="contenido">
			<div id="der2" align="center">
				<br>
			    <div id="info">
			    	<img src="ui/Img/Div IndexCliente.png">
				</div>
			</div>
			<br>		
		</div>
		<div id="bot">
			<hr>
			<img src="ui/Img/bot.png">
		</div>
	</div>
</body>
</html>