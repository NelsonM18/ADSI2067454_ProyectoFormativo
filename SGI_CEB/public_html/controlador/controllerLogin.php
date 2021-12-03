<?php
include __DIR__."/../modelo/classUsuario.php";
include __DIR__."/../modelo/classPersona.php";



$usuario = new usuario;
$persona = new persona;


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
        $num_documento = $row['persona_num_documento'];
        $cuenta_activa = $persona->validarPersona($num_documento);
        $row2 = $cuenta_activa->fetch_array();

        
        if (password_verify($password, $row['clave_usuario'])) { //Se usa el metodo password_verify para desencriptar la contraseña, tambien se llama un campo del array row.
            if ($row2['estado_id_estado']==1) {
                session_start(); 
                $_SESSION["validar"]="true"; //se guarde este campo en la variable sesion para validar siempre la sesion en el archivo seguridad
    
                $_SESSION["usuario"]=$row; // Esta linea sirve para guardar la informacion del usuario en la variable sesion, se esta guardando un arreglo dentro de otro arreglo. hay dos posiciones en session, la posicion validar y la posicion usuario, en usuario hay varios campos mas, en validar solo hay uno.
    
    
                //Seccion donde se conprueba que rol tiene el usuario.
    
                if ($row['rol_id_rol'] == "1") {//Rol de admin
                    $_SESSION["permisos"]="admin";
                    header("location:../vista/admin/indexadmin.php");
                    
                }
                elseif ($row['rol_id_rol'] == "2") {
                    $_SESSION["permisos"]="vigilante";
                    header("location:../vista/indexUsuario.php");
                }
                elseif ($row['rol_id_rol']=="3") {
                    $_SESSION["permisos"]="profesor";
                    header("location:../vista/indexUsuario.php");
                }
                elseif ($row['rol_id_rol']=="4") {
                    $_SESSION["permisos"]="personal_admin";
                    header("location:../vista/indexUsuario.php");
                }
                else {
                    
                    header("location:../index.php");
                }
    
                
            }
            else {
                echo"<script>alert('Su cuenta esta desactivada'); window.location='https://sgi-ceb.000webhostapp.com/index.php';</script>";
            }
            
           
            

        }
        else {
            echo"<script>alert('Correo o contraseña invalidos'); window.location='../vista/ingresar.php';</script>";
        }
    }
}

?>