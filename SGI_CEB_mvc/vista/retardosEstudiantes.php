<?php require_once 'includes/cabeceraSinSesion.php';?>

	<div class ="login-box">

        <img  class="avatar" src="assets/img/ciudadela_avatar.png" alt="logo">

        <h1>SGI CEB</h1>
        <p>CONSULTAR RETARDOS</p>
        <br>
        <br>
        <form action= "" method="POST">
            <!--===== USUARIO =====-->
            <label form="num_documeto" class="num_doc">Número de Documento</label>
            <input type="text" name="num_documeto" required>
            <!--===== SIGUIENTE =====-->
            <a href=""><input type="submit" value="Consultar" class="siguiente"></input></a>

        </form>

	</div>

	<div class="espacio"></div>

	

	<?php require_once 'includes/footer.php';?>