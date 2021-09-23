<?php require_once 'includes/cabeceraSinSesion.php';?>
<?php include_once("../controlador/controllerEstudiante.php");?>
<?php session_destroy();?> <!-- Se agrega para eliminar la informacion despues de que se actualice la pagina -->


	<div class ="login-box">

        <img  class="avatar" src="assets/img/ciudadela_avatar.png" alt="logo">

        <h1>SGI CEB</h1>
        <p>CONSULTAR RETARDOS</p>
        <br>
        <br>
        <form action= "../controlador/controllerEstudiante.php" method="POST">
            <!--===== USUARIO =====-->
            <label for="num_documeto" class="num_doc">Número de Documento</label>
            <input type="text" name="num_documento" required>
            <!--===== SIGUIENTE =====-->
            <a href=""><input type="submit" name="consultar_ingreso" value="Consultar" class="siguiente"></input></a>
            
            

          
            <?php       
                    $a=0;
                    $b=1;   
                    while (isset($_SESSION['resultado'][$a])) {
                        
                        echo "<fieldset>";
                        echo "<legend><label for=''class='num_doc'><b>Retardo Número: $b</b></label></legend>";
                        echo '<input type="text" disabled value="'.$_SESSION['resultado'][$a]["primer_nombre"].' '.$_SESSION['resultado'][$a]["primer_apellido"].'">';
                        echo "<label for=''class='num_doc'>Fecha:</label>";
                        echo '<input type="date" disabled value="'.$_SESSION['resultado'][$a]["fecha_ingreso"].'">';
                        echo "<label for=''class='num_doc'>Hora:</label>";
                        echo '<input type="time" disabled value="'.$_SESSION['resultado'][$a]["hora_ingreso"].'">';
                        echo "<label for=''class='num_doc'>Comentario:</label>";
                        echo '<input type="texarea" disabled value="'.$_SESSION['resultado'][$a]["comentario_historial"].'">';
                        echo "</fieldset>";
                        echo "<br>";
                        $a++;
                        $b++;
                    }


            ?>


        
        </form>

        


	</div>
    
    <div class="espacio"></div>

    

    


	

	<?php require_once 'includes/footer.php';?>