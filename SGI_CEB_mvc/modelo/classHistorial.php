<?php
include_once ("conexion.php");

class historial extends conexion{

    //Crud historial
    public function insertarIngreso($num_documento, $comentario){ //Funcion para insertar ingreso

        $sql = "INSERT INTO `historial_ingreso` (`id_historial`, `fecha_ingreso`, `hora_ingreso`, `comentario_historial`, `persona_num_documento`) VALUES (NULL, CURRENT_DATE(), CURRENT_TIME(), '$comentario', '$num_documento')";
        $consulta = $this->conexion->query($sql) or die('Ingreso no insertado');
        return $consulta;
      }

    public function listarHistorialAdmin(){ //Funcion para listar el historial general

        $sql="SELECT * FROM historial_ingreso";
        $consulta = $this->conexion->query($sql) or die('Usuario no existe');
        return $consulta;
    }

    public function actualizarIngreso($comentario, $id_historialGET){ //Funcion actualizar ingreso

        $sql="UPDATE historial_ingreso SET comentario_historial = '$comentario' WHERE id_historial = '$id_historialGET';";
        $consulta = $this->conexion->query($sql) or die('Error al actualizar');
        return $consulta;
    }

    public function eliminarIngreso($id_historialGET){ //Funcion actualizar ingreso

        $sql="DELETE FROM `historial_ingreso` WHERE `historial_ingreso`.`id_historial` = '$id_historialGET';";
        $consulta = $this->conexion->query($sql) or die('Error al eliminar');
        return $consulta;
    }
    //Historial otros métodos
    public function traeHistorial($num_documento){ //Funcion para listar los roles

        $sql="SELECT * FROM historial_ingreso WHERE persona_num_documento = '$num_documento';";
        $consulta = $this->conexion->query($sql) or die('Error al traer la información');
        return $consulta;
    }

    public function traeHistorial_idHistorial($id_historial){ //Funcion para listar el ingreso a editar.

        $sql="SELECT * FROM historial_ingreso WHERE id_historial = '$id_historial';";
        $consulta = $this->conexion->query($sql) or die('Error al traer la información');
        return $consulta;
    }
    
}


?>