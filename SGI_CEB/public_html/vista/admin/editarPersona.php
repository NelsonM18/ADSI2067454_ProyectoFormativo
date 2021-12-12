<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/permisos.php"); ?>
<?php include("../../controlador/controllerPersona.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>
<script src="assets/scripts/validarCrearPersona.js"></script>


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
	<section id="seccion_formulario">


    <form action="../../controlador/controllerPersona.php?num_documento=<?php echo $num_documento?>" method="POST" onsubmit="return validar()">
        <h1>Editar Persona</h1>
    

        <label for="">Tipo de Documento</label>
        <select name="tipo_documento" id="tipo_documento" required>
            <option selected value="0">Seleccione Una Opción</option> 
            <?php 
                while($campo = $resListarTipoDocumento->fetch_array()){    ?>

                    <option <?php if($tipo_documento==$campo['id_tipo_documento']){?>selected <?php }; ?> value="<?php echo $campo['id_tipo_documento'] ?>"> <?php echo $campo['tipo_documento'];?> </option>
    
                    <?php }; ?>  
        </select>

        <label for="">Numero de documento</label>
        <input type="text" name="num_documento" id="num_documento" value="<?php echo $num_documento?>" required></input>

        <label for="">Primer Nombre</label>
        <input type="text" name="Primer_Nombre" id="Primer_Nombre" value="<?php echo $primer_nombre?>" required></input>

        <label for="">Segundo Nombre</label>
        <input type="text" name="Segundo_Nombre" id="Segundo_Nombre" value="<?php echo $segundo_nombre?>"></input>

        <label for="">Primer apellido</label>
        <input type="text" name="Primer_Apellido" id="Primer_Apellido" value="<?php echo $primer_apellido?>" required></input>

        <label for="">Segundo apellido</label>
        <input type="text" name="Segundo_Apellido" id="Segundo_Apellido" value="<?php echo $segundo_apellido?>"></input>

        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $fecha_nacimiento?>" required></input>

        <label for="">Grupo Sanguineo</label>
        <select name="grupo_sanguineo" id="grupo_sanguineo" required>
            <option selected value="0">Elige una opción</option> 
                    <?php 
                        while($campo = $resListarGrupoSanguineo->fetch_array()){    ?>

                            <option <?php if($grupo_sanguineo==$campo['id_grupo_sanguineo']){?>selected <?php }; ?> value="<?php echo $campo['id_grupo_sanguineo'] ?>"> <?php echo $campo['grupo_sanguineo'];?> </option>
            
                            <?php } ?>    
        </select>

        <label for="">Tipo Persona</label>
        <select name="tipo_persona" id="tipo_persona" required>
            <option selected value="0">Elige una opción</option> 
                <?php 
                    while($campo = $resListarTipoPersona->fetch_array()){    ?>

                        <option <?php if($tipo_persona==$campo['id_tipo_persona']){?>selected <?php }; ?> value="<?php echo $campo['id_tipo_persona'] ?>"> <?php echo $campo['tipo_persona'];?> </option>
        
                        <?php } ?>    
        </select>

        <label for="">Género</label>
        <select name="genero" id="genero" required>
            <option selected value="0">Elige una opción</option> 
                        <?php 
                            while($campo = $resListarGenero->fetch_array()){    ?>

                                <option <?php if($genero==$campo['id_genero']){?>selected <?php }; ?> value="<?php echo $campo['id_genero'] ?>"> <?php echo $campo['genero'];?> </option>
                
                                <?php } ?>    
        </select>

        <input type="submit" value="Enviar" class="btn-submit" name="editarPersona"></input>

    </form>

        
    

	</section>

	</div>

	
	<?php require_once 'includes/footer.php';?>