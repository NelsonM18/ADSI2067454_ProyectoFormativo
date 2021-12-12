<?php require_once '../controlador/permisosU.php';?>
<?php include("../controlador/seguridad.php"); ?>
<?php require_once 'includes/cabeceraConSesion.php';?>
<?php include_once("../controlador/controllerCirculares.php"); ?>





	<div class="contenedor" id="contenedor_inicio_historial">
	
    <section id="seccion_inicio_historial">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>

        <?php 
        if ($_SESSION["permisos"]=="vigilante" || $_SESSION["permisos"]=="profesor") {
            require_once 'includes/registrarIngresos.php';
        }
        elseif ($_SESSION["permisos"]=="personal_admin"){
            ?> 
            <p>Personal Administrativo</p>
			<p>GESTIÓN CIRCULARES</p>
			<br>
    </section>
        <br>
	<section id="seccion_tabla">

        <form action="../controlador/controllerCirculares.php" method="POST" enctype="multipart/form-data"> <!-- Se agrega enctype para decir que vamos a trabajar con archivos -->
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
						<td><a href="../controlador/controllerCirculares.php?id_circularDELETE=<?php echo $campo['id_circular']?>">Eliminar</a></td>
        </tr>

        <?php } ?>
    </table>

	</section>
	    <?php
        }
        ?>


	</div>

	
<?php require_once 'includes/footer.php';?>