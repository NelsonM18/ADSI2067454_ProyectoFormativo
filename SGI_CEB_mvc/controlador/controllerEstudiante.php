<?php
include_once($_SERVER['DOCUMENT_ROOT']."/SGI_CEB_mvc/modelo/classEstudiante.php");
session_start();
$estudiante = new estudiante;

//Seccion consultar retardo estudiantil

if (isset($_REQUEST['num_documento'])) {

    $num_documento=$_REQUEST['num_documento'];
    $resIngreso = $estudiante->consultarRetardo($num_documento);

    if ($resIngreso->num_rows==0) {
        echo "<script>alert('Usted no tiene ningun retardo en su asistencia');window.location='../vista/retardosEstudiantes.php';</script>";
    }
    else {
        
        $_SESSION['resIngreso'] = $estudiante->consultarRetardo($num_documento); //Guardar en la variable sesion el resultado de la consulta, como objeto mysqli
        $a=0; //contador
        while ($row =  $_SESSION['resIngreso']->fetch_array()) {  //Pasamos del objeto a un arreglo en row
            

            $_SESSION['resultado'][$a] = $row; //se crea una variable sesion resultado y uso el contador para guardar cada registro en un arreglo independiente.

            $a = $a+1;
        }

        
       
        
        echo "<script>alert('Retardos detectados');window.location='../vista/retardosEstudiantes.php';</script>";
    }

}

?>