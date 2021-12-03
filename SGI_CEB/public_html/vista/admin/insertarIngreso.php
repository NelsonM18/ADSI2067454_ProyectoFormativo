<?php include("../../controlador/seguridad.php"); ?>
<?php include("../../controlador/permisos.php"); ?>
<?php require_once 'includes/cabeceraConSesionAdmin.php';?>




	<div class="contenedor" id="contenedor_inicio_historial">
	
    <section id="seccion_inicio_historial">
		
			<p>SISTEMA DE GESTIÓN DE INGRESO</p>
			<p>CIUDADELA EDUCATIVA DE BOSA</p>
			<br>
			<p>Registrar Ingresos</p>
            <img src="assets/img/historial_vector.png" alt="admin-icon">
			<br>
    </section>
        <br>


		<section id="seccion_insertar_ingresos">
	                <input type="checkbox" id="btn-modal">

        <form action="../../controlador/controllerIngreso.php" method="POST">

            <label for="num_documento" class="label_num_doc">Ingrese Número de Documento</label>

            <textarea class="inp-text"  name="num_documento" id="resultado" ></textarea>


            <div id="contenedor" class="contenedorCamara"></div>

            <script src="https://unpkg.com/quagga@0.12.1/dist/quagga.min.js"></script>
            <script src="assets/scripts/scriptQuagga.js"></script>

            <textarea name="comentario" id="" cols="30" rows="10" placeholder="Comentario"></textarea>
            
            
            <button type="button" class="consultar">
            <label for="btn-modal" class="lbl-modal">Consultar</label>
            </button>
            
            <input type="submit" name="insertarIngreso" id="" class="btn-submit">
            
    

        
        
        
        


        </form>
        
        <script>
                $(".consultar").click(function(){ 
                    var numDocuemntoAjax2 = $(".inp-text").val();
                    $.ajax({
                        type: "POST",
                        url: "../../controlador/controllerEstudiante.php",
                        data: {"numDocuemntoAjax2" :numDocuemntoAjax2},
                        success: function(data){
                        $('#contenido').html(data);

                        }
                    });
                });
            </script>
                
        
        <script> /*  Funcion para limpiar el modal */
          function limpiar(){
            $('#contenido').html(null);
          }
        </script>




        <div class="modal">
		<div class="contenedor2">
			<header>¡Ventana!</header>
			<label for="btn-modal" onclick="setTimeout('limpiar()',500);">X</label> <!-- Este onclick espera un tiempo para ejecutar la funcion. -->
			<div class="contenido" id="contenido">
				<!-- <h3></h3>
				<p></p> -->
			</div>
		</div>
	</div>


        
	</section>
	
<?php require_once 'includes/footer.php';?>