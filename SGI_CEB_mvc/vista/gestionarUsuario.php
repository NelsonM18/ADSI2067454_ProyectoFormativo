<?php require_once 'includes/cabeceraConSesion.php';?>


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
        <form action="">

            <label for="num_documento" class="label_num_doc">Ingrese Número de Documento</label>
            <input type="text" class="inp-text" name="num_documento">
            <input type="button" value="Consultar" class="btn-submit">
            <input type="submit" name="" id="" class="btn-submit">

        </form>
	</section>

	</div>

	
<?php require_once 'includes/footer.php';?>