<?php
include_once ("conexion.php");

class circulares extends conexion{

    
    public function listarCirculares(){ //Funcion para listar todas las circulares

        $sql = "SELECT * FROM circulares";
        $consulta = $this->conexion->query($sql) or die('Error al listar circulares');
        return $consulta;
      }

    public function insertarCircular($nombre_circular, $fecha_circular, $comentario, $tipo, $ruta, $size){ //Funcion para listar todas las circulares

        $sql = "INSERT INTO circulares (`id_circular`, `nombre_circular`, `fecha_circular`, `comentario`, `tipo`, `ruta`, `size`) VALUES (NULL, '$nombre_circular', '$fecha_circular', '$comentario', '$tipo', '$ruta', '$size');";
        $consulta = $this->conexion->query($sql) or die($this->conexion->error);
        return $consulta;
      }

    public function traeCircular($id_circular){ //Funcion para listar todas las circulares

      $sql = "SELECT * FROM circulares WHERE id_circular = $id_circular";
      $consulta = $this->conexion->query($sql) or die('Error al traer la circular');
      return $consulta;
    }

    public function actualizarCircular($nombre_circular, $fecha_circular, $comentario, $tipo, $ruta, $size, $id_circular){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos

      $sql = "UPDATE `circulares` SET nombre_circular = '$nombre_circular', fecha_circular = '$fecha_circular', comentario = '$comentario', tipo = '$tipo', ruta = '$ruta', size = '$size' WHERE id_circular = $id_circular";
      $consulta = $this->conexion->query($sql) or die('Error');
      return $consulta;
  }
    public function insertarCircularSinArchivoNuevo($id_circular,$nombreCircular, $comentario,$fecha_circular){ //Funcion para actualizar la circular sin recibir un archivo nuevo.

      $sql = "UPDATE `circulares` SET nombre_circular = '$nombreCircular', fecha_circular = '$fecha_circular', comentario = '$comentario' WHERE id_circular = $id_circular";
      $consulta = $this->conexion->query($sql) or die($this->conexion->error);
      return $consulta;
  }

    public function eliminarCircular($id_circular){ //Funcion de la clase Clases que sirve para eliminar una circular

      $sql = "DELETE FROM `circulares` WHERE id_circular='$id_circular';";
      $consulta = $this->conexion->query($sql) or die('Error al eliminar circular');
      return $consulta;
  }

    public function traeCircularMODAL($nombrePost){ //Funcion para listar todas de un mes en especifico

      $sql = "SELECT * FROM circulares WHERE MONTH(fecha_circular) = $nombrePost";
      $consulta = $this->conexion->query($sql) or die('Error al traer la circular');
      return $consulta;
  }
}


?>