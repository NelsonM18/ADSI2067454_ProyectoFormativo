<?php

require_once __DIR__."/../modelo/classEstudiante.php";
require_once __DIR__."/../modelo/classPersona.php";

$persona = new persona;

$estudiante = new estudiante;

//Seccion consultar retardo estudiantil


if (isset($_POST['numDocuemntoAjax'])) {
    $numDocuemntoAjax = $_POST['numDocuemntoAjax'];
    $res = $estudiante->consultarRetardo($numDocuemntoAjax);
    $contador = 1;
    //Imprimir la informacion
    
    if($res->num_rows==0){
        echo"<script>alert('Retardos no detectados');</script>";

    }else{
      echo"<script>alert('Retardos detectados');</script>";

    while ($res2 = $res->fetch_array()) {
        echo "<fieldset style='padding: 30px; margin: 10px'>";
        echo "<b>Retardo: ".$contador."</b>";
        echo "<br>";
        echo "<p>Fecha Ingreso: ".$res2['fecha_ingreso']."</p>";
        echo "<br>";
        echo "<br>";
        echo "<p>Hora Ingreso: ".$res2['hora_ingreso']."</p>";
        echo "<br>";
        echo "<p>Comentario: ".$res2['comentario_historial']."</p>";
        echo "<br>";
        echo "</fieldset>";
        $contador++;
        }
    }
    
}
        
        //Seccion consultar antes de insertar llegada
        
    if (isset($_POST['numDocuemntoAjax2'])) {
        $numDocuemntoAjax2 = $_POST['numDocuemntoAjax2'];
        $res = $persona->validarPersona($numDocuemntoAjax2);
        //Imprimir la informacion
        
        if($res->num_rows==0){
            echo"<script>alert('La persona no esta registrada');</script>";
    
        }else{
          echo"<script>alert('Persona en el sistema');</script>";
    
        while ($res2 = $res->fetch_array()) {
            $typeDocument;
            $tipoPersona;
            $genero;
            $estado;
            if($res2['tipo_documento_id_tipo_documento'] == 1){$typeDocument="Cédula";}else{$typeDocument="Tarjeta de Identidad";};
            if($res2['tipo_persona_id_tipo_persona'] == 1){$tipoPersona="Institucional";}elseif($res2['tipo_persona_id_tipo_persona'] == 2){$tipoPersona="Externo";}else{$tipoPersona="Estudiante";};
            if($res2['genero_id_genero'] == 1){$genero="Masculino";}else{$genero="Femenino";};
            if($res2['genero_id_genero'] == 1){$estado="Activo";}else{$estado="Inactivo";};
            
            echo "<fieldset style='padding: 30px; margin: 10px'>";
            echo "<b>Número documento: ".$res2['num_documento']."</b>";
            echo "<br>";
            echo "<p>Nombres: ".$res2['primer_nombre']." ".$res2['segundo_nombre']."</p>";
            echo "<br>";
            echo "<p>Apellidos: ".$res2['primer_apellido']." ".$res2['segundo_apellido']."</p>";
            echo "<br>";
            echo "<p>Tipo de Documento: ".$typeDocument."</p>";
            echo "<br>";
            echo "<p>Tipo Persona: ".$tipoPersona."</p>";
            echo "<br>";
            echo "<p>Género: ".$genero."</p>";
            echo "<br>";
            echo "<p>Estado Cuenta: ".$estado."</p>";
            echo "<br>";
            echo "</fieldset>";
            }
        }
    
    }   





?>