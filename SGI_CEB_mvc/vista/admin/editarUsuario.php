<?php require_once 'includes/cabeceraConSesionAdmin.php'; ?>
<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/controllerUsuario.php"); ?>


<script type="text/javascript" src="assets/scripts/validarCrearUsuario.js"></script>

<div id="contenedor_usuario">
  <div id="formulario">
    <form action="../../controlador/controllerUsuario.php?num_documento=<?php echo $num_documento?>" method="post" onsubmit="return validar()">
      <h2>Crear Usuario </h2><br><br>
      <label>Correo Institucional: </label>
      <input type="email" name="correoI" id="correo" placeholder="   Ingrese Correo electronico" value="<?php echo $correo_usuario?>"><br><br>

      <label>Rol: </label>
        <select name="rol" id="rol" placeholder="  Selecione Un Rol">
            <option selected value="">-Seleccione Una Opción-</option> 
                    <?php 
                        while($campo = $resListarRoles->fetch_array()){    ?>

                            <option <?php if($rol==$campo['id_rol']){?>selected <?php }; ?> value="<?php echo $campo['id_rol'] ?>"> <?php echo $campo['rol'];?> </option>
            
                            <?php } ?>    
        </select><br><br>


      <label>Numero de Identificación: </label>
      <input type="text" name="num_documento" value="<?php echo $num_documento?>" id="documento" placeholder="  Numero de documento" disabled><br><br>
      <input type="submit" name="editarUsuario" id="registar" value="Guardar">
    </form>
  </div>
</div>
<?php require_once 'includes/footer.php'; ?>
