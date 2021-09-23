<?php
include($_SERVER['DOCUMENT_ROOT']."/SGI_CEB_mvc/modelo/classUsuario.php");
$usuario = new usuario;

//Seccion Login

if(isset($_REQUEST['login'])) {  //Entrada de datos del form ingresar
    
    $correo_usuario=$_REQUEST['correo_usuario']; //Guardar la informacion recibida en variables php
    $password=$_REQUEST['clave_usuario'];

    //Llamamos las funciones del usuario
    
    $res=$usuario->validar($correo_usuario); //Se llama la funcion "validar" con su parametro y se guarda en la variable $res

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

?>