<?php
include_once($_SERVER['DOCUMENT_ROOT']."/SGI_CEB_mvc/modelo/classUsuario.php");
include_once("controllerPersona.php");


$usuario = new usuario;


//Seccion Crear Usuario

if (isset($_REQUEST['crearUsuario'])) {
    $correoInstitucional=$_REQUEST['correoI'];
    $claveInstitucional=$_REQUEST['claveI'];
    $rol=$_REQUEST['rol'];
    $num_documento=$_REQUEST['num_documento'];

    $claveInstitucional=password_hash($claveInstitucional,PASSWORD_DEFAULT);
    
    $resUsuario= $persona->validarPersona($num_documento);

    $resUsuario2= $usuario->validarUsuario2($num_documento,$correoInstitucional);
    

    if ($resUsuario->num_rows==1) {

        if ($resUsuario2->num_rows==1) {
            echo"<script>alert('Este usuario ya esta registrado'); window.history.back();</script>";
        }
        else {
            $usuario->crearUsuario($correoInstitucional, $claveInstitucional, $rol, $num_documento);
             header("location:../vista/admin/gestionarU.php");
        }
        
        
    }
    else {
        echo"<script>alert('Esta persona no esta en el sistema'); window.history.back();</script>";
       
    }

}

//Seccion Editar Usuario

if (isset($_GET['num_documentoEDIT_U'])) {
    $num_documento = $_GET['num_documentoEDIT_U'];
    $res = $usuario->validarUsuario($num_documento);
    $row = $res->fetch_array();

    $num_documento=$row['persona_num_documento'];
    $correo_usuario=$row['correo_usuario'];
    $rol=$row['id_rol'];
    
}


if (isset($_REQUEST['editarUsuario'])) {
    $num_documento=$_REQUEST['num_documento'];
    $correo_usuario=$_REQUEST['correoI'];
    $rol=$_REQUEST['rol'];
   
    

    $resUsuario= $usuario->actualizarUsuario($correo_usuario,$rol,$num_documento);
    if ($resUsuario==true) {
        echo "<script>alert('Usuario editado correctamente'); window.location='../vista/admin/gestionarU.php';</script>";
    }
    else {
        echo "<script>alert('error')</script>";
       
    }

}





//Seccion Inactivar Usuario

if (isset($_GET['num_documentoINAC_U'])) {

    $num_documentoGET= $_GET['num_documentoINAC_U'];
    $persona->inactivarPersona($num_documentoGET);
    echo "<script>alert('Usuario inactivado correctamente'); window.location='../admin/gestionarU.php';</script>";

}

//Seccion Inactivar Usuario

if (isset($_GET['num_documentoACTIV_U'])) {

    $num_documentoGET= $_GET['num_documentoACTIV_U'];
    $persona->activarPersona($num_documentoGET);
    echo "<script>alert('Usuario inactivado correctamente'); window.location='../admin/gestionarU.php';</script>";

}

//Seccion desasignar Usuario

if (isset($_GET['num_documentoDESA_U'])) {

    $num_documentoGET= $_GET['num_documentoDESA_U'];
    $usuario->desasignarUsuario($num_documentoGET);
    echo "<script>alert('Usuario desasignado correctamente'); window.location='../admin/gestionarU.php';</script>";
    $persona->activarPersona($num_documentoGET); //Cambiar el estado a activo después de la desasignación.

}



$resListado2 = $usuario->listarUsuarios(); //Seccion de listar usuarios para el Administrador

$resListadoINAC = $usuario->listarUsuariosINAC(); //Seccion de listar usuarios inactivados (Realmente se desactiva la persona) para el Administrador

$resListarRoles = $usuario->traeRoles(); //Seccion listar roles

?>