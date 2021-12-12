<?php include("../controlador/seguridad.php"); ?>
<?php include("../controlador/permisosU.php"); ?>
<?php require_once 'includes/cabeceraConSesion.php';?>
<?php include_once("../controlador/controllerCirculares.php"); ?>
<?php include("../controlador/controllerCirculares.php"); ?>




	<div class="contenedor" id="contenedor_inicio_historial">
	<section id="seccion_inicio">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>Personal Administrativo</p>
			<p>GESTIÓN CIRCULARES</p>
			<br>
    </section>
        <br>
	<section id="seccion_tabla">

        <form action="../../controlador/controllerCirculares.php" method="POST" enctype="multipart/form-data"> <!-- Se agrega enctype para decir que vamos a trabajar con archivos -->
        <input type="text" value="<?php echo $id_circular?>" name="id_circular">
        <br>
        <b>Reemplazar Circular</b>
        <input type="file" name="circular" value="<?php echo $ruta?>">
        <br>
        <p>Nombre circular</p>
        <input type="text" name="nombreCircular" value="<?php echo $nombre_circular?>">
        <br>
        <p>Comentario</p>
        <input type="text" name="comentario" value="<?php echo $comentario?>">
        <br>
        <p>Archivo Actual:<a href="circulares/<?php echo $ruta;?>" target="_blank"><?php echo $ruta;?></a></p>
        <input type="submit" name="editarCircular">
        </form>



	</section>

	</div>

	
	<?php require_once 'includes/footer.php';?>