<?php require_once 'includes/cabeceraSinSesion.php';?>

	<div class ="login-box">

        <img  class="avatar" src="assets/img/ciudadela_avatar.png" alt="logo">

        <h1>SGI CEB</h1>
        <form action= "../controlador/controllerLogin.php" method="POST">
            <!--===== USUARIO =====-->
            <label form="email">Correo</label>
            <input type="email" name="correo_usuario" required>
            <!--===== CONTRASEÑA =====-->
            <label form="password">Contraseña</label>
            <input type="password" name="clave_usuario" required>

            <!--===== SIGUIENTE =====-->
            <a href=""><input type="submit" value="Siguiente" class="siguiente" name="login"></input></a>
            <!--===== LINKS =====-->
            <a href="#">¿Olvide mi contraseña?</a><br>
            <a href="#">¿No tengo una cuenta?</a>

        </form>

	</div>

	<div class="espacio"></div>

	

	<?php require_once 'includes/footer.php';?>