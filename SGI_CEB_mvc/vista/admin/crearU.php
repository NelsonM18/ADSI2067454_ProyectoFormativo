<?php require_once 'includes/cabeceraConSesionAdmin.php'; ?>
<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/controlador.php"); ?>


<script type="text/javascript" src="assets/scripts/validarCrearUsuario.js"></script>

<div id="contenedor_usuario">
  <div id="formulario">
    <form action="../../controlador/controlador.php" method="post" onsubmit="return validar()">
      <h2>Crear Usuario </h2><br><br>
      <label>Correo Institucional: </label>
      <input type="email" name="correoI" id="correo" placeholder="   Ingrese Correo electronico" value=""><br><br>
      <label>Clave: </label>
      <input type="password" name="claveI" id="clave" placeholder="  Ingrese Contraseña" value=""><br><br>

      <label>Rol: </label>
      <select name="rol" id="rol" placeholder="  Selecione Un Rol">
            <option selected value="">-Seleccione Una Opción-</option> 
            <?php 
                while($campo = $resListarRoles->fetch_array()){    ?>

                    <option value="<?php echo $campo['id_rol'] ?>"> <?php echo $campo['rol'];?> </option>
    
                    <?php } ?>    
        </select><br><br>

      <label>Numero de Identificación: </label>

      <select name="num_documento" id="documento" placeholder="  Selecione Un Rol">
            <option selected value="">-Seleccione Una Opción-</option> 
            <?php 
                while($campo = $resListado->fetch_array()){    ?>

                    <option value="<?php echo $campo['num_documento'] ?>"> <?php echo $campo['primer_nombre']." "; echo $campo['primer_apellido']." | ";echo $campo['num_documento'];?> </option>
    
                    <?php } ?>    
        </select><br><br>

      <input type="submit" name="crearUsuario" id="registar" value="Registrar Correo">
    </form>
  </div>
</div>
<?php require_once 'includes/footer.php'; ?>
