<?php
include($_SERVER['DOCUMENT_ROOT']."/SGI_CEB_mvc/modelo/classHistorial.php");
$historial = new historial;
session_start();


//Seccion Iditar ingreso

if (isset($_GET['id_ingreso_EditarIngreso'])) {

    $id_historialGET= $_GET['id_ingreso_EditarIngreso'];
    $res = $historial->traeHistorial_idHistorial($id_historialGET);
    $row = $res->fetch_array();

    $id_historial=$row['id_historial'];
    $comentario=$row['comentario_historial'];


}

if (isset($_REQUEST['actualizarIngreso'])) {
    $id_historialGET= $_GET['id_ingreso_EditarIngreso'];
    $comentario=$_REQUEST['comentario'];
   
    
    $resIngresoActualizado= $historial->actualizarIngreso($comentario, $id_historialGET);
    if ($resIngresoActualizado==true) {
        echo "<script>alert('Ingreso editado correctamente'); window.location='../vista/admin/gestionarIngresos.php';</script>";
    }
    else {
        echo "<script>alert('error')</script>";
       
    }

}


//Seccion Insertar ingreso

if (isset($_REQUEST['insertarIngreso'])) {

    $num_documento= $_REQUEST['num_documento'];
    $comentario= $_REQUEST['comentario'];
    $historial->insertarIngreso($num_documento, $comentario);
    echo "<script>alert('Ingreso insertado correctamente');  window.location=document.referrer; </script>";

}

//Seccion Eliminar ingreso


if (isset($_GET['id_ingreso_EliminarIngreso'])) {

    $id_historialGET= $_GET['id_ingreso_EliminarIngreso'];
    $res = $historial->eliminarIngreso($id_historialGET);
    echo "<script>alert('Ingreso eliminado correctamente'); window.location='gestionarIngresos.php';</script>";

}

$resListadoAdminHistorial = $historial->listarHistorialAdmin(); //Seccion de listar la gestion de historial

$resListarHistorial = $historial->traeHistorial($_SESSION["usuario"]["persona_num_documento"]); //Seccion de listar el historial



?>