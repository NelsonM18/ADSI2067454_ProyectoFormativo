<?php require_once 'includes/cabeceraSinSesion.php';?>
<?php include_once("../controlador/controllerEstudiante.php");?>

    <div class="espacio"></div>



	<div class ="login-box">

        <img  class="avatar" src="assets/img/ciudadela_avatar.png" alt="logo">

        <h1>SGI CEB</h1>
        <p>CONSULTAR RETARDOS</p>
        <br>
        <br>
        <div>
            <!--===== USUARIO =====-->
            <label for="num_documeto" class="num_doc">Número de Documento</label>
            <input class="numDocumento" type="text" name="num_documento" required>
            <!--===== SIGUIENTE =====-->
            <button name="consultar_ingreso" class="siguiente">Consultar</button>
            
            <script>
                $(".siguiente").click(function(){ 
                    var numDocuemntoAjax = $(".numDocumento").val();
                    $.ajax({
                        type: "POST",
                        url: "../controlador/controllerEstudiante.php",
                        data: {"numDocuemntoAjax" :numDocuemntoAjax},
                        success: function(data){
                        $('#contenidoConsultar').html(data);

                        }
                    });
                });
            </script>

            <div id="contenidoConsultar"></div>



        
        </div>

        


	</div>
    
    <div class="espacio"></div>

    

    


	

	<?php require_once 'includes/footer.php';?>