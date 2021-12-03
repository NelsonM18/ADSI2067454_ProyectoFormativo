<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/permisos.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>
<?php include("../../controlador/controllerIngreso.php"); ?>




	<div class="contenedor" id="contenedor_inicio_historial">
	
    <section id="seccion_inicio_historial">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>Registrar Ingresos</p>
            <img src="assets/img/historial_vector.png" alt="admin-icon">
			<br>
    </section>
        <br>


	<section id="seccion_insertar_ingresos">
        <form action="../../controlador/controllerIngreso.php?id_ingreso_EditarIngreso=<?php echo $row['id_historial']?>" method="POST">
            <label for="comentario" class="label_num_doc">Actualizar Comentario</label>
            <textarea name="comentario" id="" cols="30" rows="10" placeholder="Comentario" ><?php echo $comentario?></textarea>
            <input type="button" value="Consultar" class="btn-submit">
            <input type="submit" name="actualizarIngreso" id="" class="btn-submit">

        </form>
	</section>

	</div>

	
<?php require_once 'includes/footer.php';?>