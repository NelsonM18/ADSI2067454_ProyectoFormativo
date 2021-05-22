<?php include("../../controlador/controlador.php"); ?>
<?php include("../../controlador/seguridad.php"); ?>
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


    <form action="../../controlador/controlador.php" method="POST" onsubmit="return validar()">
        <h1>Crear Persona</h1>

        <label for="">Tipo de Documento</label>
        <select name="tipo_documento" id="tipo_documento" required>
            <option selected value="0">Elige una opción</option> 
            <option value="2"></option> 
            <option value="3"></option>
            <option value="10"></option> 
            <option value="11"></option> 
        </select>

        <label for="">Numero de documento</label>
        <input type="text" name="num_documento" id="num_documento" required></input>

        <label for="">Primer Nombre</label>
        <input type="text" id="Primer_Nombre" required></input>

        <label for="">Segundo Nombre</label>
        <input type="text" id="Segundo_Nombre"></input>

        <label for="">Primer apellido</label>
        <input type="text" id="Primer_Apellido" required></input>

        <label for="">Segundo apellido</label>
        <input type="text" id="Segundo_Apellido"></input>

        <label for="">Fecha de Nacimiento</label>
        <input type="date" id="fecha_naciemiento" required></input>

        <label for="">Grupo Sanguineo</label>
        <select name="grupo_sanguineo" id="grupo_sanguineo" required>
            <option selected value="0">Elige una opción</option>
            <option value="1"></option> 
            <option value="2"></option> 
            <option value="3"></option>
            <option value="10"></option> 
            <option value="11"></option> 
            <option value="12"></option> 
        </select>

        <label for="">Tipo Persona</label>
        <select name="tipo_persona" id="tipo_persona" required>
            <option selected value="0">Elige una opción</option> 
            <option value="1"></option> 
            <option value="2"></option> 
        </select>

        <label for="">Género</label>
        <select name="genero" id="genero" required>
            <option selected value="0">Elige una opción</option>
            <option value="1"></option> 
            <option value="2"></option> 
        </select>

        <input type="submit" value="Enviar" class="btn-submit" name="crearPersona" ></input>

    </form>

        
    

	</section>

	</div>

	
	<?php require_once 'includes/footer.php';?>