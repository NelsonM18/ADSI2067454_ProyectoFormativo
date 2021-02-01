<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SGI CEB</title>
	<link rel="stylesheet" type="text/css" href="./css/styles.css"/>
</head>
<body>

	<header>
		<div class="contenedor"> 
			<a href="index.php"><h1>SGI CEB</h1></a>
			<input type="checkbox" id="menu-roll">
			<label for="menu-roll"><img src="./img/menu-roll.png" alt=""></label>
			<nav class="menu">
				<ul>
					<a href="index.php"><li>Inicio</li></a>
					<a href=""><li>Circulares Escolares</li></a>
					<a href=""><li>Retardos Estudiantiles</li></a>
					<a href=""><li>¿Quiénes somos?</li></a>
					<a href=""><li>Ingresar</li></a>
				</ul>
			</nav>
		</div>
	</header>

	<div class ="login-box">

        <img  class="avatar" src="img/ciudadela_avatar.png" alt="logo">

        <h1>SGI CEB</h1>
        <form action= "../login.php" method="POST">
            <!--===== USUARIO =====-->
            <label form="email">Correo</label>
            <input type="email" name="email" required>
            <!--===== CONTRASEÑA =====-->
            <label form="password">Contraseña</label>
            <input type="password" name="password" required>

            <!--===== SIGUIENTE =====-->
            <a href=""><input type="submit" value="Siguiente" class="siguiente"></input></a>
            <!--===== LINKS =====-->
            <a href="#">¿Olvide mi contraseña?</a><br>
            <a href="registrar.html">¿No tengo una cuenta?</a>

        </form>

	</div>

	<div class="espacio"></div>

	

	<footer id="pie">
		<div class="contenedor">
			<p>Desarrollado por SGI &copy 2021</p>
		</div>
	</footer>

</body>
</html>