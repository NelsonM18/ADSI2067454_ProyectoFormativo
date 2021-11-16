<?php require_once 'includes/cabeceraConSesionAdmin.php';?>
<?php include_once("../../controlador/controllerCirculares.php"); ?>
<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/controllerCirculares.php"); ?>




	<div class="contenedor" id="contenedor_chingon">
	<section id="seccion_inicio">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>ADMINISTRADOR</p>
			<img src="assets/img/admin-icon.png" alt="admin-icon">
			<p>GESTIÓN CIRCULARES</p>
			<br>
    </section>
        <br>
	<section id="seccion_tabla">

        <form action="../../controlador/controllerCirculares.php" method="POST" enctype="multipart/form-data"> <!-- Se agrega enctype para decir que vamos a trabajar con archivos -->
        <br>
        <b>Subir Circular</b>
        <input type="file" name="circular">
        <br>
        <p>Nombre circular</p>
        <input type="text" name="nombreCircular">
        <br>
        <p>Comentario</p>
        <input type="text" name="comentario">
        <br>
        <input type="submit" name="insertarCircular">
        </form>


    <table class="tablaIngresos">
    <tr>
            <th>Nombre Circular</th>
            <th>Fecha Circular</th>
            <th>Comentario</th>
            <th>tipo</th>
            <th>ruta</th>
            <th>size</th>


            <th colspan="2">Acción</th>
        </tr>
        <?php
        while ($campo = $resListadoCirculares->fetch_array()) { ?>

        <tr>
            <td><?php echo $campo["nombre_circular"]; ?></td>
            <td><?php echo $campo["fecha_circular"]; ?></td>
            <td><?php echo $campo["comentario"]; ?></td>
            <td><?php echo $campo["tipo"]; ?></td>
            <td><a href="circulares/<?php echo $campo['ruta'];?>" target="_blank"><?php echo $campo['ruta'];?></a></td>
            <td><?php echo $campo["size"]; ?></td>


                        <td><a href="editarCirculares.php?id_circularEDIT=<?php echo $campo['id_circular']?>">Editar</a></td>
						<td><a href="editarCirculares.php?id_circularDELETE=<?php echo $campo['id_circular']?>">Eliminar</a></td>
        </tr>

        <?php } ?>
    </table>

	</section>

	</div>

	
	<?php require_once 'includes/footer.php';?>