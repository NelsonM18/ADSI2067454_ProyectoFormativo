<?php
require_once __DIR__."/../modelo/classCirculares.php";


$circulares = new circulares;
//Seccion Insertar circular

if (isset($_REQUEST['insertarCircular'])) {
    if (is_uploaded_file($_FILES['circular']['tmp_name'])) { //Saber si el archivo si esta adjuntado
        //Seccion para que solo se permita ingresar archivos .pdf
        $formatos_permitidos =  array('pdf');
        $archivo = $_FILES['circular']['name'];
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        if(!in_array($extension, $formatos_permitidos) ) {
            echo "<script>alert('Solo se permite archivos en formato PDF.');  window.location=document.referrer; </script>";
        }
        else{

            $ruta = __DIR__."/../vista/admin/circulares/"; //Direccion de la carpeta de las circulares
            $nombreFinal = trim ($_FILES['circular']['name']);  //método par quitar los espacios en el nombre del archivo (aunque creo que no sirve xd)
            $upload = $ruta . $nombreFinal; //se concatena para definir la ruta y el archivo a subir
    
            
            if (is_file($upload)) { //Comprobar si ese archivo ya existe
                echo "<script>alert('El archivo ya se encuentra registrado, cambia el nombre del archivo si quieres subirlo');  window.location=document.referrer; </script>";
            }
            else {

                if (move_uploaded_file($_FILES['circular']['tmp_name'], $upload)) { //move_uploaded_files sube el archivo que llega a la ruta upload

                    $nombreCircular= $_REQUEST['nombreCircular'];
                    $comentario= $_REQUEST['comentario'];
                    $fecha_circular = date('d-m-y');
                    $tipo = $_FILES['circular']['type']; //Se guardan los datos del archivo recibido
                    $size = $_FILES['circular']['size'];
                    $ruta = $_FILES['circular']['name'];
            
            
                    $circulares->insertarCircular($nombreCircular, $fecha_circular, $comentario, $tipo, $ruta, $size);
                    echo "<script>alert('Circular insertada correctamente');  window.location=document.referrer; </script>";
                }
            }
        }
    }
}


//Seccion Editar Circular

if (isset($_GET['id_circularEDIT'])) {
    $id_circular = $_GET['id_circularEDIT'];
    $res = $circulares->traeCircular($id_circular);
    $row = $res->fetch_array();

    $nombre_circular=$row['nombre_circular'];
    $fecha_circular=$row['fecha_circular'];
    $comentario=$row['comentario'];
    $tipo=$row['tipo'];
    $ruta=$row['ruta'];
    $size=$row['size'];

}


if (isset($_REQUEST['editarCircular'])) {

    if (is_uploaded_file($_FILES['circular']['tmp_name'])) { //Saber si el archivo si esta adjuntado
    
        $ruta = __DIR__."/../vista/admin/circulares/"; //Direccion de la carpeta de las circulares
        $nombreFinal = trim ($_FILES['circular']['name']);  //método par quitar los espacios en el nombre del archivo (aunque creo que no sirve xd)
        $upload = $ruta . $nombreFinal; //se concatena para definir la ruta y el archivo a subir
        
        $id_circular= $_REQUEST['id_circular'];
        $res = $circulares->traeCircular($id_circular);
        $row = $res->fetch_array();
        $nombreArchivoAntiguo = $row['ruta'];

        $upload2 = $ruta . $nombreArchivoAntiguo;

        if (is_file($upload)) { //Comprobar si ese archivo ya existe
            echo "<script>alert('El archivo ya se encuentra registrado, cambia el nombre del archivo si quieres subirlo');  window.location=document.referrer; </script>";
        }
        else {
                //Seccion para eliminar el archivo para que entre el otro
            if(unlink($upload2)) {
                echo "Archivo eliminado";
            } else {
                    echo "Archivo no eliminado";
            }

            if (move_uploaded_file($_FILES['circular']['tmp_name'], $upload)) { //move_uploaded_files sube el archivo que llega a la ruta upload

                $nombreCircular= $_REQUEST['nombreCircular'];
                $comentario= $_REQUEST['comentario'];
                $fecha_circular = date('d-m-y');
                $tipo = $_FILES['circular']['type']; //Se guardan los datos del archivo recibido
                $size = $_FILES['circular']['size'];
                $ruta = $_FILES['circular']['name'];

            $circulares->actualizarCircular($nombreCircular, $fecha_circular, $comentario, $tipo, $ruta, $size, $id_circular);
            echo "<script>alert('Circular reemplazada correctamente');  window.history.go(-2); </script>";
            }
            else {
                echo "<script>alert('error')</script>";
            
            }

            
        }
           

    
    }
    else {

        //Seccion de actualizar sin que se haya detectado que el archivo cambio
        $id_circular= $_REQUEST['id_circular'];

        $nombreCircular= $_REQUEST['nombreCircular'];
        $comentario= $_REQUEST['comentario'];
        $fecha_circular = date('d-m-y');

        $circulares->insertarCircularSinArchivoNuevo($id_circular,$nombreCircular, $comentario,$fecha_circular);
        echo "<script>alert('Circular reemplazada correctamente, no se cambio el archivo');  window.history.go(-2); </script>";
    }
    

}

//Seccion eliminar circular

if (isset($_GET['id_circularDELETE'])) {

    $id_circular= $_GET['id_circularDELETE'];

    $ruta = __DIR__."/../vista/admin/circulares/"; //Direccion de la carpeta de las circulares

    $res = $circulares->traeCircular($id_circular);
    $row = $res->fetch_array();
    $nombreArchivoAntiguo = $row['ruta'];

    $upload2 = $ruta . $nombreArchivoAntiguo;
        //Seccion para eliminar el archivo 
    if(unlink($upload2)) {
        echo "Archivo eliminado";
      } else {
            echo "Archivo no eliminado";
      }

    $circulares->eliminarCircular($id_circular);
    echo "<script>alert('Circular eliminada correctamente');  window.location=document.referrer; </script>";

}

//Seccion traer circulares con Ajax
if (isset($_POST['nombrePost'])) {
    $nombrePost = $_POST['nombrePost'];
    $res = $circulares->traeCircularMODAL($nombrePost);

    //Imprimir la informacion
    while ($res2 = $res->fetch_array()) {
        echo "<fieldset style='padding: 30px; margin: 10px'>";
        echo "<b>Nombre Circular: ".$res2['nombre_circular']."</b>";
        echo "<br>";
        echo "<p>Fecha Circular: ".$res2['fecha_circular']."</p>";
        echo "<br>";
        echo "<p>Comentario: ".$res2['comentario']."</p>";
        echo "<br>";
        echo "<p>Circular: </p><a href='../vista/admin/circulares/".$res2['ruta']."' target='_blank'>".$res2['ruta']."</a>";
        echo "</fieldset>";
    }
    
}




$resListadoCirculares = $circulares->listarCirculares();



?>