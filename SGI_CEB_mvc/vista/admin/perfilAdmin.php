<?php require_once 'includes/cabeceraConSesionAdmin.php';?>


<!--Menu Lateral-->
    <div id="Menu">
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
                            <h3 class="titulo">Juan Garcia</h3>
                            <p class="texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore iure, ipsa
                                id distinctio quaerat sint provident blanditiis! Numquam dolorum, sequi autem delectus,
                                nostrum rerum veritatis consequatur doloribus, ratione odit impedit.</p>
                        </div>

                        <!--Informacion de Usuario-->
                        <div class="perfil-usuario-footer">
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-signs"></i> Codigo de usuario:</li>
                                <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                                <li><i class="icono fas fa-briefcase"></i> Dicta Calse En:</li>
                                <li><i class="icono fas fa-users-class"></i> A Cargo De:</li>
                            </ul>

                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-marker-alt"></i> Sede:</li>
                                <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento:</li>
                                <li><i class="icono fas fa-user-check"></i>Documeto:</li>
                                <li><i class="icono fas fa-share-alt"></i> Correo:</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

<?php require_once 'includes/footer.php';?>