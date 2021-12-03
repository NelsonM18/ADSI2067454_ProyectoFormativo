<?php
include_once __DIR__."/../modelo/classUsuario.php";
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

//Seccion recuperar contraseña

if (isset($_REQUEST['enviarCorreo'])) {

    $correo_usuario= $_REQUEST['correo_usuario'];
    $res = $usuario->validar($correo_usuario);
    if ($res->num_rows==1) {
        $asunto = "Cambio de contraseña solicitado";
        $pin = rand(10000, 99999);
        $mensaje = "Hola bla bla bla se solicito el cambio de contraseña, su pin es: ".$pin;
        mail($correo_usuario, $asunto, $mensaje);
        $usuario->generarPin($pin, $correo_usuario);

/*         echo "<script>alert('Revisa tu correo'); window.location='../vista/ingresar.php';</script>";
 */
    }
    else {
        echo "<script>alert('El correo no está registrado'); window.location='../vista/olvideContraseña.php';</script>";
    }
    
}



$resListado2 = $usuario->listarUsuarios(); //Seccion de listar usuarios para el Administrador

$resListadoINAC = $usuario->listarUsuariosINAC(); //Seccion de listar usuarios inactivados (Realmente se desactiva la persona) para el Administrador

$resListarRoles = $usuario->traeRoles(); //Seccion listar roles

?>