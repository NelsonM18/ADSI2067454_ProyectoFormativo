<?php require_once 'includes/cabeceraConSesion.php';?>
<?php include("../controlador/controlador.php"); ?>
<?php include("../controlador/seguridad.php"); ?>




	<div class="contenedor" id="contenedor_inicio_historial">
	
    <section id="seccion_inicio_historial">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>Nombre de usuario</p>
			<p>Ingresos Registrados</p>
            <img src="assets/img/historial_vector.png" alt="admin-icon">
			<br>
    </section>
        <br>


	<section id="seccion_tabla_historial">
        
    <table class="tablaHistorial">
        <tr>
            <th>Hora Ingreso</th>
            <th>Fecha Ingreso</th>
            <th>Comentario</th>          
        </tr>
        <?php
        while ($campo = $resListarHistorial->fetch_array()) { ?>

        <tr>
        <td><?php echo $campo["hora_ingreso"]; ?></td>
            <td><?php echo $campo["fecha_ingreso"]; ?></td>
            <td><?php echo $campo["comentario_historial"]; ?></td>
        </tr>

        <?php } ?>

    </table>

	</section>

	</div>

	
<?php require_once 'includes/footer.php';?>