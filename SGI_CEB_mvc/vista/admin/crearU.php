<?php require_once 'includes/cabeceraConSesionAdmin.php'; ?>
<script type="text/javascript" src="assets/scripts/validarCrearUsuario.js"></script>

<div id="contenedor_usuario">
  <div id="formulario">
    <form action="" method="post" onsubmit="validar()">
      <h2>Crear Usuario </h2><br><br>
      <label>Correo Institucional: </label>
      <input type="email" name="correoI" id="correo" placeholder="   Ingrese Correo electronico" value=""><br><br>
      <label>Clave: </label>
      <input type="password" name="claveI" id="clave" placeholder="  Ingrese Contraseña" value=""><br><br>
      <label>Rol: </label>
      <select class="" name="rol" id="rol" placeholder="  Selecione Un Rol">
        <option selected value="">-Seleccione Una Opción-</option>
        <option value="1">Administrador</option>
        <option value="3">Profesor</option>
        <option value="2">Vigilante</option>
        <option value="4">Area Administrativa</option>
      </select><br><br>
      <label>Numero de Identificación: </label>
      <input type="text" name="documento" value="" id="documento" placeholder="  Numero de documento"><br><br>
      <input type="submit" name="usuarioI" id="registar" value="Registrar Correo">
    </form>
  </div>
</div>
<?php require_once 'includes/footer.php'; ?>
