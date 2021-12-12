<?php 
include_once ("conexion.php");

class usuario extends conexion{

    // Crud usuarios
    public function crearUsuario($correoInstitucional, $claveInstitucional, $rol, $num_documento){ //Funcion de la clase Clases que sirve para insertar un usuario nuevo a la base de datos

      $sql = "INSERT INTO `usuario` (`id_usuario`, `correo_usuario`, `clave_usuario`, `rol_id_rol`, `persona_num_documento`) VALUES (NULL, '$correoInstitucional', '$claveInstitucional', '$rol', '$num_documento')";
      $consulta = $this->conexion->query($sql) or die('Usuario no creado');
      return $consulta;
    }
    
    public function actualizarUsuario($correo_usuario,$rol,$num_documento){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos
  
      $sql = "UPDATE `usuario` SET correo_usuario = '$correo_usuario', rol_id_rol = '$rol' WHERE persona_num_documento='$num_documento' ;";
      $consulta = $this->conexion->query($sql) or die('Error');
      return $consulta;
    }

    public function listarUsuarios(){ //Funcion para listar los usuarios del sistema

      $sql="SELECT * FROM usuario
      INNER JOIN persona ON persona.num_documento=usuario.persona_num_documento
      INNER JOIN rol ON rol.id_rol=usuario.rol_id_rol";
      $consulta = $this->conexion->query($sql) or die('Usuario no existe');
      return $consulta;
    }

    public function listarUsuariosINAC(){ //Funcion para listar los usuarios del sistema

      $sql="SELECT * FROM usuario
      INNER JOIN persona ON persona.num_documento=usuario.persona_num_documento
      INNER JOIN rol ON rol.id_rol=usuario.rol_id_rol WHERE persona.estado_id_estado = '2'";
      $consulta = $this->conexion->query($sql) or die('Usuario no existe');
      return $consulta;
    }

    public function desasignarUsuario($num_documentoGET){ //Método para eliminar el usuario relacionado con la persona; la persona no se elimina.

      $sql = "DELETE FROM `usuario` WHERE persona_num_documento='$num_documentoGET';";
      $consulta = $this->conexion->query($sql) or die('Error');
      return $consulta;
    }


    // Otros Métodos
    public function validar($dato1){ //Funcion para consultar si un usuario existe en la base de datos SOLO por medio del correo registrado

      $sql="SELECT * FROM usuario 
      INNER JOIN rol ON rol.id_rol = usuario.rol_id_rol
      INNER JOIN persona ON persona.num_documento = usuario.persona_num_documento 
      where correo_usuario='$dato1'";
      $consulta = $this->conexion->query($sql) or die('Usuario no existe');
      return $consulta;
    }

    public function validarUsuario($dato1){ //Funcion para consultar si un usuario existe en la base de datos

      $sql="SELECT * FROM usuario 
      INNER JOIN rol ON rol.id_rol = usuario.rol_id_rol
      INNER JOIN persona ON persona.num_documento = usuario.persona_num_documento 
      where persona_num_documento='$dato1'";
      $consulta = $this->conexion->query($sql) or die('Usuario no existe');
      return $consulta;
    }

    public function validarUsuario2($dato1,$dato2){ //Funcion para consultar si un usuario existe en la base de datos

      $sql="SELECT * FROM usuario 
      INNER JOIN rol ON rol.id_rol = usuario.rol_id_rol
      INNER JOIN persona ON persona.num_documento = usuario.persona_num_documento 
      where persona_num_documento='$dato1' OR correo_usuario='$dato2'";
      $consulta = $this->conexion->query($sql) or die('Usuario no existe');
      return $consulta;
  
    }

    public function traeRoles(){ //Funcion para listar los roles que tienen los usuarios registrados

      $sql="SELECT * FROM rol;";
      $consulta = $this->conexion->query($sql) or die('Error al traer la información');
      return $consulta;
    }

    public function generarPin($pin, $correo_usuario){ //Funcion para generar el pin y registrar ese mismo en la base de datos

      $sql="UPDATE `usuario` SET `pin_key` = '$pin' WHERE `usuario`.`correo_usuario` = '$correo_usuario';";
      $consulta = $this->conexion->query($sql) or die($this->conexion->error);
      return $consulta;
    }
  
}
?>