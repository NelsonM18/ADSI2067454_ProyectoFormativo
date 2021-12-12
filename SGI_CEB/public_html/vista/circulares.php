<?php require_once 'includes/cabeceraSinSesion.php';?>


<br><br><br><br><br><br>



<input type="checkbox" id="btn-modal">
<div class="contenedorCarpeta">

  <div class="carpetasDIVS">
  <button type="button" class="cirEnero">
	<label for="btn-modal" class="lbl-modal">Cricular Enero</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </button>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirFebrero">
	<label for="btn-modal" class="lbl-modal">Cricular Febrero</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirMarzo">
	<label for="btn-modal" class="lbl-modal">Cricular Marzo</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirAbril">
	<label for="btn-modal" class="lbl-modal">Cricular Abril</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirMayo">
	<label for="btn-modal" class="lbl-modal">Cricular Mayo</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>
  
</div>

<div class="contenedorCarpeta">

  <div class="carpetasDIVS">
  <button type="button" class="cirJunio">
	<label for="btn-modal" class="lbl-modal">Cricular Junio</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </button>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirJulio">
	<label for="btn-modal" class="lbl-modal">Cricular Julio</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirAgosto">
	<label for="btn-modal" class="lbl-modal">Cricular Agosto</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirSeptiembre">
	<label for="btn-modal" class="lbl-modal">Cricular Septiembre</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirOctubre">
	<label for="btn-modal" class="lbl-modal">Cricular Octubre</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>
  
</div>

<div class="contenedorCarpeta">

  <div class="carpetasDIVS">
  <button type="button" class="cirNoviembre">
	<label for="btn-modal" class="lbl-modal">Cricular Noviembre</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </button>
  </div>

  <div class="carpetasDIVS">
  <button type="button" class="cirDiciembre">
	<label for="btn-modal" class="lbl-modal">Cricular Diciembre</label>
  <label for="btn-modal"><img src="assets/img/carpeta.png" alt=""></label>
  </div>
  
</div>

<!-- Codigo de ajax que solicita la informacion al servidor sin recargar la página -->
<script>
    $(".cirEnero").click(function(){ 
          var nombrePost = 1;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirFebrero").click(function(){ 
          var nombrePost = 2;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirMarzo").click(function(){ 
          var nombrePost = 3;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirAbril").click(function(){ 
          var nombrePost = 4;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirMayo").click(function(){ 
          var nombrePost = 5;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirJunio").click(function(){ 
          var nombrePost = 6;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirJulio").click(function(){ 
          var nombrePost = 7;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirAgosto").click(function(){ 
          var nombrePost = 8;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirSeptiembre").click(function(){ 
          var nombrePost = 9;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirOctubre").click(function(){ 
          var nombrePost = 10;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirNoviembre").click(function(){ 
          var nombrePost = 11;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
            success: function(data){
              $('#contenido').html(data);

            }
          });
      });
</script>

<script>
    $(".cirDiciembre").click(function(){ 
          var nombrePost = 12;
          $.ajax({
            type: "POST",
            url: "../controlador/controllerCirculares.php",
            data: {"nombrePost" :nombrePost},
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
			<header>¡Carpeta!</header>
			<label for="btn-modal" onclick="setTimeout('limpiar()',500);">X</label> <!-- Este onclick espera un tiempo para ejecutar la funcion. -->
			<div class="contenido" id="contenido">
				<!-- <h3></h3>
				<p></p> -->
			</div>
		</div>
	</div>



<?php require_once 'includes/footer.php';?>