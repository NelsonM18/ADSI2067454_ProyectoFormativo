<?php include("../../controlador/controlador.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>
<?php include("../../controlador/seguridad.php"); ?>




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


    <a href="crearU.php"><button class="btn-crearU">Crear Usuario</button></a>


    <table class="tablaUsuarios">
      <tr>
        <th>Correo Institucioonal</th>
        <th>Rol Institucional</th>
        <th>Número de Documento</th>
        <th>Primer Nombre</th>
        <th>Primer Apellido</th>
        <th colspan="2">Acción</th>
      </tr>





      <?php
      while ($campo = $resListado2->fetch_array()) { ?>

        <tr>
          <td><?php echo $campo["correo_usuario"]; ?></td>
          <td><?php echo $campo["rol"];?></td>
          <td><?php echo $campo["persona_num_documento"];?></td>
          <td><?php echo $campo["primer_nombre"];?></td>
          <td><?php echo $campo["primer_apellido"];?></td>
          <td><a href="#">Editar</a></td>
          <td><a href="#">Inactivar</a></td>
        </tr>

      <?php } ?>

    </table>

  </section>

</div>


<?php require_once 'includes/footer.php';?>
