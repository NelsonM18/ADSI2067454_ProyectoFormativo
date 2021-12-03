<?php
include_once __DIR__."/../modelo/classPersona.php";



$persona = new persona;



//Seccion Crear persona

if (isset($_REQUEST['crearPersona'])) {
    $tipo_documento=$_REQUEST['tipo_documento'];
    $num_documento=$_REQUEST['num_documento'];
    $primer_nombre=$_REQUEST['Primer_Nombre'];
    $segundo_nombre=$_REQUEST['Segundo_Nombre'];
    $primer_apellido=$_REQUEST['Primer_Apellido'];
    $segundo_apellido=$_REQUEST['Segundo_Apellido'];
    $fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
    $grupo_sanguineo=$_REQUEST['grupo_sanguineo'];
    $tipo_persona=$_REQUEST['tipo_persona'];
    $genero=$_REQUEST['genero'];
    $resPersona= $persona->validarPersona($num_documento);
    
    if ($resPersona->num_rows==0) {
        
        $persona->crearPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero);
        header("location:../vista/admin/gestionarusuarios.php");
    }
    else {
        echo"<script>alert('Esta persona ya esta en el sistema'); window.history.back();</script>";
       
    }

}

//Seccion Editar Persona

if (isset($_GET['num_documentoEDIT'])) {
    $num_documento = $_GET['num_documentoEDIT'];
    $res = $persona->validarPersona($num_documento);
    $row = $res->fetch_array();

    $tipo_documento=$row['tipo_documento_id_tipo_documento'];
    $num_documento=$row['num_documento'];
    $primer_nombre=$row['primer_nombre'];
    $segundo_nombre=$row['segundo_nombre'];
    $primer_apellido=$row['primer_apellido'];
    $segundo_apellido=$row['segundo_apellido'];
    $fecha_nacimiento=$row['fecha_nacimiento'];
    $grupo_sanguineo=$row['grupo_sanguineo_id_grupo_sanguineo'];
    $tipo_persona=$row['tipo_persona_id_tipo_persona'];
    $genero=$row['genero_id_genero'];
}


if (isset($_REQUEST['editarPersona'])) {
    $tipo_documento=$_REQUEST['tipo_documento'];
    $num_documento=$_REQUEST['num_documento'];
    $primer_nombre=$_REQUEST['Primer_Nombre'];
    $segundo_nombre=$_REQUEST['Segundo_Nombre'];
    $primer_apellido=$_REQUEST['Primer_Apellido'];
    $segundo_apellido=$_REQUEST['Segundo_Apellido'];
    $fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
    $grupo_sanguineo=$_REQUEST['grupo_sanguineo'];
    $tipo_persona=$_REQUEST['tipo_persona'];
    $genero=$_REQUEST['genero'];
    $num_documentoGET= $_GET['num_documento'];
    

    $resPersona= $persona->actualizarPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero, $num_documentoGET);
    if ($resPersona==true) {
        echo "<script>alert('Usuario editado correctamente'); window.location='../vista/admin/gestionarusuarios.php';</script>";
    }
    else {
        echo "<script>alert('error')</script>";
       
    }

}

//Seccion Inactivar Persona

if (isset($_GET['num_documentoINAC'])) {

    $num_documentoGET= $_GET['num_documentoINAC'];
    $persona->inactivarPersona($num_documentoGET);
    echo "<script>alert('Persona inactivado correctamente'); window.location='../admin/gestionarusuarios.php';</script>";

}


//Seccion Activar persona

if (isset($_GET['num_documentoACTIV'])) {

    $num_documentoGET= $_GET['num_documentoACTIV'];
    $persona->activarPersona($num_documentoGET);
    echo "<script>alert('Persona activado correctamente'); window.location='../admin/gestionarusuarios.php';</script>";

}


//Seccion Eliminar persona

if (isset($_GET['num_documentoELIMINAR'])) {

    $num_documentoGET= $_GET['num_documentoELIMINAR'];
    $persona->eliminarPersona($num_documentoGET);
    echo "<script>alert('Usuario eliminado correctamente'); window.location='../admin/gestionarusuarios.php';</script>";

}



$resListado = $persona->listarPersonas(); //Seccion de listar personas para el Administrador

$resListarPersonasINAC = $persona->listarPersonasINAC(); //Seccion de listar personas para el Administrador

$resListarTipoDocumento = $persona->traeTipoDocumento(); //Seccion listar los tipos de documentos

$resListarTipoPersona = $persona->traeTipoPersona(); //Seccion listar los tipos de persona

$resListarGrupoSanguineo = $persona->traeGrupoSanguineo(); //Seccion listar los grupos sanguineos

$resListarGenero = $persona->traeGenero(); //Seccion listar los generos



?>