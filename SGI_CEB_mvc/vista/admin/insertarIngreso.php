<?php require_once 'includes/cabeceraConSesionAdmin.php';?>


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
        <form action="../../controlador/controllerIngreso.php" method="POST">

            <label for="num_documento" class="label_num_doc">Ingrese Número de Documento</label>
            <input type="text" class="inp-text" name="num_documento">
            <textarea name="comentario" id="" cols="30" rows="10" placeholder="Comentario"></textarea>
            <input type="button" value="Consultar" class="btn-submit">
            <input type="submit" name="insertarIngreso" id="" class="btn-submit">

        </form>
	</section>

	</div>

	
<?php require_once 'includes/footer.php';?>