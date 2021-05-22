<?php require_once 'includes/cabeceraConSesionAdmin.php';?>
<?php include("../../controlador/controlador.php"); ?>
<?php include("../../controlador/seguridad.php"); ?>



	<div class="contenedor" id="contenedor_chingon">
	<section id="seccion_inicio">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>ADMINISTRADOR</p>
			<img src="assets/img/admin-icon.png" alt="admin-icon">
			<p>GESTIÓN INGRESOS</p>
			<br>
    </section>
        <br>
	<section id="seccion_tabla">
        
    <table class="tablaIngresos">
    <tr>
            <th>Número de documento</th>
            <th>Hora Ingreso</th>
            <th>Fecha Ingreso</th>
            <th>Comentario</th>
            <th colspan="2">Acción</th>
        </tr>
        <?php
        while ($campo = $resListadoAdminHistorial->fetch_array()) { ?>

        <tr>
        <td><?php echo $campo["persona_num_documento"]; ?></td>
            <td><?php echo $campo["hora_ingreso"]; ?></td>
            <td><?php echo $campo["fecha_ingreso"]; ?></td>
            <td><?php echo $campo["comentario_historial"]; ?></td>

                        <td><a href="#">Editar</a></td>
						<td><a href="#">Inactivar</a></td>
        </tr>

        <?php } ?>
    </table>

	</section>

	</div>

	
	<?php require_once 'includes/footer.php';?>