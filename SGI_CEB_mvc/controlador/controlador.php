
<?php

include($_SERVER['DOCUMENT_ROOT']."/SGI_CEB_mvc/modelo/clases.php");

$objeto = new clases;

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
    $resPersona= $objeto->validarPersona($num_documento);
    
    if ($resPersona->num_rows==0) {
        
        $objeto->crearPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero);
        header("location:../vista/admin/gestionarusuarios.php");
    }
    else {
        echo"<script>alert('Esta persona ya esta en el sistema'); window.history.back();</script>";
       
    }

}


//Seccion Crear Usuario

if (isset($_REQUEST['crearUsuario'])) {
    $correoInstitucional=$_REQUEST['correoI'];
    $claveInstitucional=$_REQUEST['claveI'];
    $rol=$_REQUEST['rol'];
    $num_documento=$_REQUEST['num_documento'];

    $claveInstitucional=password_hash($claveInstitucional,PASSWORD_DEFAULT);
    
    $resUsuario= $objeto->validarPersona($num_documento);
    
    if ($resUsuario->num_rows==1) {
        
        $objeto->crearUsuario($correoInstitucional, $claveInstitucional, $rol, $num_documento);
        header("location:../vista/admin/gestionarU.php");
    }
    else {
        echo"<script>alert('Esta persona no esta en el sistema'); window.history.back();</script>";
       
    }

}

//Seccion Editar Usuario

if (isset($_GET['num_documentoEDIT_U'])) {
    $num_documento = $_GET['num_documentoEDIT_U'];
    $res = $objeto->validarUsuario($num_documento);
    $row = $res->fetch_array();

    $num_documento=$row['persona_num_documento'];
    $correo_usuario=$row['correo_usuario'];
    $rol=$row['id_rol'];
    
}


if (isset($_REQUEST['editarUsuario'])) {
    $num_documento=$_REQUEST['num_documento'];
    $correo_usuario=$_REQUEST['correoI'];
    $rol=$_REQUEST['rol'];
   
    

    $resUsuario= $objeto->actualizarUsuario($correo_usuario,$rol,$num_documento);
    if ($resUsuario==true) {
        echo "<script>alert('Usuario editado correctamente'); window.location='../vista/admin/gestionarU.php';</script>";
    }
    else {
        echo "<script>alert('error')</script>";
       
    }

}





//Seccion Login

if(isset($_REQUEST['login'])) {  //Entrada de datos del form ingresar
    
    $correo_usuario=$_REQUEST['correo_usuario']; //Guardar la informacion recibida en variables php
    $password=$_REQUEST['clave_usuario'];

    //Llamamos las funciones del objeto
    
    $res=$objeto->validar($correo_usuario); //Se llama la funcion "validar" con su parametro y se guarda en la variable $res

    if($res->num_rows==0){ //Se usa el metodo num_rows para saber si validar encontro en la base de datos un campo
        
        echo"<script>alert('Correo o contraseña invalidos'); window.location='../vista/ingresar.php';</script>";
    }
    else{
        $row = $res->fetch_array(); //Se crea la variable row para guardar en un array los datos del usuario para luego comprobar la contraseña
        if (password_verify($password, $row['clave_usuario'])) { //Se usa el metodo password_verify para desencriptar la contraseña, tambien se llama un campo del array row.
            session_start(); 
            $_SESSION["validar"]="true"; //se guarde este campo en la variable sesion para validar siempre la sesion en el archivo seguridad

            $_SESSION["usuario"]=$row; // Esta linea sirve para guardar la informacion del usuario en la variable sesion, se esta guardando un arreglo dentro de otro arreglo. hay dos posiciones en session, la posicion validar y la posicion usuario, en usuario hay varios campos mas, en validar solo hay uno.

            //Seccion donde se conprueba que rol tiene el usuario.

            if ($row['rol_id_rol']==1) {//Rol de admin

                header("location:../vista/admin/indexadmin.php");
                
            }
            else {
                
                header("location:../vista/indexUsuario.php");
            }

            

        }
        else {
            echo"<script>alert('Correo o contraseña invalidos'); window.location='../vista/ingresar.php';</script>";
        }
    }
}

//Seccion Editar Persona

if (isset($_GET['num_documentoEDIT'])) {
    $num_documento = $_GET['num_documentoEDIT'];
    $res = $objeto->validarPersona($num_documento);
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
    

    $resPersona= $objeto->actualizarPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero, $num_documentoGET);
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
    $objeto->inactivarPersona($num_documentoGET);
    echo "<script>alert('Usuario inactivado correctamente'); window.location='../admin/gestionarusuarios.php';</script>";

}




    

    //Llamamos las funciones del objeto

    $resListado = $objeto->listarPersonas(); //Seccion de listar personas para el Administrador

    $resListado2 = $objeto->listarUsuarios(); //Seccion de listar usuarios para el Administrador

    $resListadoAdminHistorial = $objeto->listarHistorialAdmin(); //Seccion de listar la gestion de historial

    $resListarTipoDocumento = $objeto->traeTipoDocumento(); //Seccion listar los tipos de documentos

    $resListarTipoPersona = $objeto->traeTipoPersona(); //Seccion listar los tipos de persona

    $resListarGrupoSanguineo = $objeto->traeGrupoSanguineo(); //Seccion listar los grupos sanguineos

    $resListarGenero = $objeto->traeGenero(); //Seccion listar los generos

    $resListarRoles = $objeto->traeRoles(); //Seccion listar roles

    

   

    

   


    


    

    
    

    







?>