<?php
include("conexion.php");

$objeto = new conexion; // se crea el objeto conexion para ejecutar la funcion constructor y poder usar sus variables

/**
 *
 */
class clases extends conexion{  //Se crea la clase clases que hereda de conexion para poder usar la variable conexion.


  public function crear($a, $b, $c, $d, $e){ //Funcion de la clase Clases que sirve para insertar un usuario nuevo a la base de datos

    $sql = "INSERT INTO persona(numero_documento,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,fecha_nacimiento,genero)
    VALUES('$a','$b','$c','$d','$e')";
    $consulta = $this->conexion->query($sql) or die('Usuario no creado');
    return $consulta;
  }



  public function validar($dato1){ //Funcion para consultar si un usuario existe en la base de datos SOLO por medio del correo registrado

    $sql="select * from usuario where correo_usuario='$dato1'";
    $consulta = $this->conexion->query($sql) or die('Usuario no existe');
    return $consulta;

  }

  public function listarPersonas(){ //Funcion para listar las personas del sistema

    $sql="select * from persona";
    $consulta = $this->conexion->query($sql) or die('Usuario no existe');
    return $consulta;

  }


}


?>
