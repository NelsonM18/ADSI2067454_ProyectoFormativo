<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/permisos.php"); ?>
<?php include("../../controlador/controllerPersona.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>






	<div class="contenedor" id="contenedor_chingon">
	<section id="seccion_inicio">

			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>ADMINISTRADOR</p>
			<img src="assets/img/admin-icon.png" alt="admin-icon">
			<p>GESTIÓN PERSONAS</p>
			<br>
    </section>
        <br>
	<section id="seccion_tabla">


    <a href="crearPersona.php"><button class="btn-crearP">Crear Persona</button></a>


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
            <th colspan="2">Acción</th>
        </tr>





        <?php
        while ($campo = $resListado->fetch_array()) { ?>

        <tr>
        <td><?php echo $campo["primer_nombre"]; ?></td>
            <td><?php echo $campo["segundo_nombre"]; ?></td>
            <td><?php echo $campo["primer_apellido"]; ?></td>
            <td><?php echo $campo["segundo_apellido"]; ?></td>
            <td><?php echo $campo["genero"]; ?></td>
            <td><?php echo $campo["num_documento"]; ?></td>
            <td><?php echo $campo["tipo_documento"]; ?></td>
            <td><?php echo $campo["grupo_sanguineo"]; ?></td>
            <td><?php echo $campo["tipo_persona"]; ?></td>
            <td><a href="editarPersona.php?num_documentoEDIT=<?php echo $campo['num_documento']?>">Editar</a></td>
			<td><a href="gestionarusuarios.php?num_documentoINAC=<?php echo $campo['num_documento']?>" >Inactivar</a></td>
        </tr>

        <?php } ?>

    </table>

	</section>
    <section id="seccion_tabla">
    <br>
    <br>
    <br>
    <br>
    <b><p>USUARIOS INACTIVADAS</p></b>
    
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
            <th colspan="2">Acción</th>
        </tr>





        <?php
        while ($campo = $resListarPersonasINAC->fetch_array()) { ?>

        <tr>
        <td><?php echo $campo["primer_nombre"]; ?></td>
            <td><?php echo $campo["segundo_nombre"]; ?></td>
            <td><?php echo $campo["primer_apellido"]; ?></td>
            <td><?php echo $campo["segundo_apellido"]; ?></td>
            <td><?php echo $campo["genero"]; ?></td>
            <td><?php echo $campo["num_documento"]; ?></td>
            <td><?php echo $campo["tipo_documento"]; ?></td>
            <td><?php echo $campo["grupo_sanguineo"]; ?></td>
            <td><?php echo $campo["tipo_persona"]; ?></td>
            <td><a href="gestionarusuarios.php?num_documentoACTIV=<?php echo $campo['num_documento']?>"><b>Activar</b></a></td>
			<td><a href="gestionarusuarios.php?num_documentoELIMINAR=<?php echo $campo['num_documento']?>" >Eliminar</a></td>
        </tr>

        <?php } ?>

    </table>

	</section>


	</div>


	<?php require_once 'includes/footer.php';?>
