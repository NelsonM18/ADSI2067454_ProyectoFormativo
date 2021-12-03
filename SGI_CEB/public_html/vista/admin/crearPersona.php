<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/permisos.php"); ?>
<?php include("../../controlador/controllerPersona.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>




<script type="text/javascript" src="assets/scripts/validarCrearPersona.js"></script>



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

	<section id="seccion_formulario">

    <form action="../../controlador/controllerPersona.php" method="POST">
        <h1>Crear Persona</h1>

        <label for="">Tipo de Documento</label>
        <select name="tipo_documento" id="tipo_documento" required>
            <option value="0">Elige una opción</option> 
            <?php 
                while($campo = $resListarTipoDocumento->fetch_array()){    ?>

                    <option value="<?php echo $campo['id_tipo_documento'] ?>"> <?php echo $campo['tipo_documento'];?> </option>
    
                    <?php } ?>    
        </select>

        <label for="">Numero de documento</label>
        <input type="text" name="num_documento" id="num_documento" ></input>

        <label for="">Primer Nombre</label>
        <input type="text" name="Primer_Nombre" id="Primer_Nombre" required></input>

        <label for="">Segundo Nombre</label>
        <input type="text" name="Segundo_Nombre" id="Segundo_Nombre"></input>

        <label for="">Primer apellido</label>
        <input type="text" name="Primer_Apellido" id="Primer_Apellido" required></input>

        <label for="">Segundo apellido</label>
        <input type="text" name="Segundo_Apellido" id="Segundo_Apellido"></input>

        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required></input>

        <label for="">Grupo Sanguineo</label>
        <select name="grupo_sanguineo" id="grupo_sanguineo" required>
            <option value="0">Elige una opción</option> 
                    <?php 
                        while($campo = $resListarGrupoSanguineo->fetch_array()){    ?>

                            <option value="<?php echo $campo['id_grupo_sanguineo'] ?>"> <?php echo $campo['grupo_sanguineo'];?> </option>
            
                            <?php } ?>    
        </select>

        <label for="">Tipo Persona</label>
        <select name="tipo_persona" id="tipo_persona" required>
            <option value="0">Elige una opción</option> 
                <?php 
                    while($campo = $resListarTipoPersona->fetch_array()){    ?>

                        <option value="<?php echo $campo['id_tipo_persona'] ?>"> <?php echo $campo['tipo_persona'];?> </option>
        
                        <?php } ?>    
        </select>

        <label for="">Género</label>
        <select name="genero" id="genero" required>
            <option value="0">Elige una opción</option> 
                        <?php 
                            while($campo = $resListarGenero->fetch_array()){    ?>

                                <option value="<?php echo $campo['id_genero'] ?>"> <?php echo $campo['genero'];?> </option>
                
                                <?php } ?>    
        </select>

        <input type="submit" value="Enviar" class="btn-submit" name="crearPersona"  onclick="return validar()"></input>

    </form>

        
    

	</section>

	</div>

	
	<?php require_once 'includes/footer.php';?>