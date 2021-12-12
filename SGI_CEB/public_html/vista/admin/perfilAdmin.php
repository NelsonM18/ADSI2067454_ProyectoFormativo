<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/permisos.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>



<!--Menu Lateral-->
    <!-- <div id="Menu">
        <ul>
        
        <li><h3>Gestión de Usuarios</h3></li><br>
        <li><a href="#">Ingresos a la Institucion</a></li>
        <li><a href="#">Historial</a></li>
        <li><a href="#">Consultar Ingreso</a></li>
        
        <li><h3>Ayuda</h3></li><br>
        <li><a href="#">Peticiones</a></li>
        <li><a href="#">Reportar un Problema</a></li>
        </ul>
    </div>
 -->

<!--Portada, Imagen y Perfil-->
    <div id="Principal_Central">
        <main>
            <div class="main__container">
                <section class="seccion-perfil-usuario">
                    <div class="perfil-usuario-header">
                        <div class="perfil-usuario-portada">
                            <div class="perfil-usuario-avatar">
                                <img src="assets/img/unnamed.png">
                            </div>
                        </div>
                    </div>

                    <!--Biografia-->
                    <div class="perfil-usuario-body">
                        <div class="perfil-usuario-bio">
                            <h3 class="titulo"><?php echo $_SESSION["usuario"]["primer_nombre"]." ".$_SESSION["usuario"]["segundo_nombre"]." ".$_SESSION["usuario"]["primer_apellido"]." ".$_SESSION["usuario"]["segundo_apellido"];?></h3>
                            
                            <p class="texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque consequuntur rem vel qui cum dolorem placeat est. Aliquid eum unde cupiditate? Nulla vel ab doloribus esse quos velit explicabo eaque?</p>
                        </div>

                        <!--Informacion de Usuario-->
                        <div class="perfil-usuario-footer">
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-user-check"></i>Documeto: <?php echo $_SESSION["usuario"]["num_documento"]?></li>
                                <li><i class="icono fas fa-map-signs"></i>Tipo de documento: <?php if ($_SESSION["usuario"]["tipo_documento_id_tipo_documento"] == 1){echo "Cédula";}elseif($_SESSION["usuario"]["tipo_documento_id_tipo_documento"] == 2){echo "Tarjeta de Identidad";}elseif($_SESSION["usuario"]["tipo_documento_id_tipo_documento"] == 3){echo "Cedula de extranjeria";}else{echo "Pasaporte";}?></li>
                                <li><i class="icono fas fa-calendar-alt"></i>Fecha nacimiento: <?php echo $_SESSION["usuario"]["fecha_nacimiento"]?></li>
                                <li><i class="icono fas fa-share-alt"></i>Correo: <?php echo $_SESSION["usuario"]["correo_usuario"]?></li>

                            </ul>

                            <ul class="lista-datos">
                                <li><i class="icono fas fa-briefcase"></i>Rol: <?php if ($_SESSION["usuario"]["rol_id_rol"] == 1){echo "Administrador";}elseif($_SESSION["usuario"]["rol_id_rol"] == 2){echo "Vigilante";}elseif($_SESSION["usuario"]["rol_id_rol"] == 3){echo "Profesor";}else{echo "Personal Administrativo";}?></li>
                                <li><i class="icono fas fa-map-signs"></i>Grupo sanguieno: <?php if ($_SESSION["usuario"]["grupo_sanguineo_id_grupo_sanguineo"] == 1){echo "A+";}elseif($_SESSION["usuario"]["grupo_sanguineo_id_grupo_sanguineo"] == 2){echo "A-";}elseif($_SESSION["usuario"]["grupo_sanguineo_id_grupo_sanguineo"] == 3){echo "B+";}elseif($_SESSION["usuario"]["grupo_sanguineo_id_grupo_sanguineo"] == 4){echo "B-";}elseif($_SESSION["usuario"]["grupo_sanguineo_id_grupo_sanguineo"] == 5){echo "AB+";}elseif($_SESSION["usuario"]["grupo_sanguineo_id_grupo_sanguineo"] == 6){echo "AB-";}elseif($_SESSION["usuario"]["grupo_sanguineo_id_grupo_sanguineo"] == 7){echo "O+";}else{echo "O-";}?></li>
                                <li><i class="icono fas fa-users-class"></i>Género: <?php if ($_SESSION["usuario"]["genero_id_genero"] == 1){echo "Masculino";}elseif($_SESSION["usuario"]["genero_id_genero"] == 2){echo "Femenino";}else{echo "Indefinido";}?></li>


                            </ul>

                            
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

<?php require_once 'includes/footer.php';?>