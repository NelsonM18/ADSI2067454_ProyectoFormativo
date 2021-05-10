<?php include("../../controlador/controlador.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>



	<div class="contenedor" id="contenedor_chingon">
	<section id="seccion_inicio">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>ADMINISTRADOR</p>
			<img src="assets/img/admin-icon.png" alt="admin-icon">
			<p>GESTIÓN USUARIOS</p>
			<br>
    </section>
        <br>
	<section id="seccion_tabla">
        
    <table class="tablaUsuarios">
        <tr>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Género</th>
            <th>Número Documento</th>
            <th>Tipo Documento</th>
            <th>Grupo Sanguineo</th>
            <th>Tipo Persona</th>
            <th>Acción</th>
        </tr>

        
        

      
        <?php
        while ($campo = $resListado->fetch_array()) { ?>
            
        <tr>
            <td><?php echo $campo["primer_nombre"]; ?></td>
            <td><?php echo $campo["segundo_nombre"]; ?></td>
            <td><?php echo $campo["primer_apellido"]; ?></td>
            <td><?php echo $campo["segundo_apellido"]; ?></td>
            <td><?php echo $campo["genero_id_genero"]; ?></td>
            <td><?php echo $campo["num_documento"]; ?></td>
            <td><?php echo $campo["tipo_documento_id_tipo_documento"]; ?></td>
            <td><?php echo $campo["grupo_sanguineo_id_grupo_sanguineo"]; ?></td>
            <td><?php echo $campo["tipo_persona_id_tipo_persona"]; ?></td>
            <td></td>
        </tr>

        <?php } ?>

    </table>

	</section>

	</div>

	
	<?php require_once 'includes/footer.php';?>