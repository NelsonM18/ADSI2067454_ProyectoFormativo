<?php require_once 'includes/cabeceraConSesionAdmin.php';?>
<?php include("../../controlador/controlador.php"); ?>
<?php include("../../controlador/seguridad.php"); ?>



	<div class="contenedor" id="contenedor_inicio_historial">
	
    <section id="seccion_inicio_historial">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p><?php echo "Bienvenido, ".$_SESSION["usuario"]["primer_nombre"];?></p>
			<p>Ingresos Registrados</p>
            <img src="../assets/img/historial_vector.png" alt="admin-icon">
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
        <tr>
            <td></td>
            <td></td>
            <td></td>            
        </tr>
    </table>

	</section>

	</div>

	
<?php require_once 'includes/footer.php';?>