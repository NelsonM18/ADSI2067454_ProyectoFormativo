<?php
include("conexion.php");

$objeto = new conexion; // se crea el objeto conexion para ejecutar la funcion constructor y poder usar sus variables

/**
 *
 */
class clases extends conexion{  //Se crea la clase clases que hereda de conexion para poder usar la variable conexion.


  public function crearPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos

    
    $sql = "INSERT INTO `persona` (`num_documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `grupo_sanguineo_id_grupo_sanguineo`, `tipo_documento_id_tipo_documento`, `tipo_persona_id_tipo_persona`, `genero_id_genero`, estado_id_estado) VALUES ('$num_documento', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$fecha_nacimiento', '$grupo_sanguineo', '$tipo_documento', '$tipo_persona', '$genero', '1');";
    $consulta = $this->conexion->query($sql) or die('Persona no creada');
    return $consulta;
  }

  public function inactivarPersona($num_documentoGET){ //Funcion de la clase Clases que sirve para inactivar una persona nuevo a la base de datos

    
    $sql = "UPDATE `persona` SET estado_id_estado = '2' WHERE num_documento='$num_documentoGET';";
    $consulta = $this->conexion->query($sql) or die('Error');
    return $consulta;
  }

  public function activarPersona($num_documentoGET){ //Funcion de la clase Clases que sirve para activar una persona nuevo a la base de datos

    
    $sql = "UPDATE `persona` SET estado_id_estado = '1' WHERE num_documento='$num_documentoGET';";
    $consulta = $this->conexion->query($sql) or die('Error');
    return $consulta;
  }


  public function actualizarPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero, $num_documentoGET){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos

    
    $sql = "UPDATE `persona` SET num_documento = '$num_documento', primer_nombre = '$primer_nombre', segundo_nombre = '$segundo_nombre', primer_apellido = '$primer_apellido', segundo_apellido = '$segundo_apellido', fecha_nacimiento = '$fecha_nacimiento', grupo_sanguineo_id_grupo_sanguineo = '$grupo_sanguineo', tipo_documento_id_tipo_documento = '$tipo_documento', tipo_persona_id_tipo_persona = '$tipo_persona', genero_id_genero = '$genero' WHERE num_documento='$num_documentoGET';";
    $consulta = $this->conexion->query($sql) or die('Error');
    return $consulta;
  }

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



  public function validar($dato1){ //Funcion para consultar si un usuario existe en la base de datos SOLO por medio del correo registrado

    $sql="SELECT * FROM usuario 
    INNER JOIN rol ON rol.id_rol = usuario.rol_id_rol
    INNER JOIN persona ON persona.num_documento = usuario.persona_num_documento 
    where correo_usuario='$dato1'";
    $consulta = $this->conexion->query($sql) or die('Usuario no existe');
    return $consulta;

  }

  public function validarPersona($dato1){ //Funcion para consultar si un usuario existe en la base de datos SOLO por medio del correo registrado

    $sql="SELECT * FROM persona where num_documento='$dato1'";
    $consulta = $this->conexion->query($sql) or die('Persona ya existe');
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

  public function listarPersonas(){ //Funcion para listar las personas del sistema

    $sql="SELECT * FROM persona
    INNER JOIN tipo_documento ON persona.tipo_documento_id_tipo_documento=tipo_documento.id_tipo_documento
    INNER JOIN grupo_sanguineo ON persona.grupo_sanguineo_id_grupo_sanguineo=grupo_sanguineo.id_grupo_sanguineo
    INNER JOIN tipo_persona ON persona.tipo_persona_id_tipo_persona=tipo_persona.id_tipo_persona
    INNER JOIN genero ON persona.genero_id_genero=genero.id_genero
    INNER JOIN estado ON persona.estado_id_estado=estado.id_estado WHERE persona.estado_id_estado = 1";
    $consulta = $this->conexion->query($sql) or die('Usuario no existe');
    return $consulta;

  }

  public function listarPersonasINAC(){ //Funcion para listar las personas del sistema

    $sql="SELECT * FROM persona
    INNER JOIN tipo_documento ON persona.tipo_documento_id_tipo_documento=tipo_documento.id_tipo_documento
    INNER JOIN grupo_sanguineo ON persona.grupo_sanguineo_id_grupo_sanguineo=grupo_sanguineo.id_grupo_sanguineo
    INNER JOIN tipo_persona ON persona.tipo_persona_id_tipo_persona=tipo_persona.id_tipo_persona
    INNER JOIN genero ON persona.genero_id_genero=genero.id_genero
    INNER JOIN estado ON persona.estado_id_estado=estado.id_estado WHERE persona.estado_id_estado = 2";
    $consulta = $this->conexion->query($sql) or die('Usuario no existe');
    return $consulta;

  }

  

  public function listarUsuarios(){ //Funcion para listar los usuarios del sistema

    $sql="SELECT * FROM usuario
    INNER JOIN persona ON persona.num_documento=usuario.persona_num_documento
    INNER JOIN rol ON rol.id_rol=usuario.rol_id_rol";
    $consulta = $this->conexion->query($sql) or die('Usuario no existe');
    return $consulta;

  }

  public function listarHistorialAdmin(){ //Funcion para listar el historial general

    $sql="SELECT * FROM historial_ingreso";
    $consulta = $this->conexion->query($sql) or die('Usuario no existe');
    return $consulta;

  }

  public function traeTipoDocumento(){ //Funcion para listar los tipos de documentos

    $sql="SELECT * FROM tipo_documento;";
    $consulta = $this->conexion->query($sql) or die('Error al traer la información');
    return $consulta;

  }

  public function traeTipoPersona(){ //Funcion para listar los tipos de persona

    $sql="SELECT * FROM tipo_persona;";
    $consulta = $this->conexion->query($sql) or die('Error al traer la información');
    return $consulta;

  }

  public function traeGrupoSanguineo(){ //Funcion para listar los grupos sanguineos

    $sql="SELECT * FROM grupo_sanguineo;";
    $consulta = $this->conexion->query($sql) or die('Error al traer la información');
    return $consulta;

  }

  
  public function traeGenero(){ //Funcion para listar los generos

    $sql="SELECT * FROM genero;";
    $consulta = $this->conexion->query($sql) or die('Error al traer la información');
    return $consulta;

  }

  public function traeRoles(){ //Funcion para listar los roles

    $sql="SELECT * FROM rol;";
    $consulta = $this->conexion->query($sql) or die('Error al traer la información');
    return $consulta;

  }

  public function insertarIngreso($num_documento, $comentario){ //Funcion para insertar ingreso

    $sql = "INSERT INTO `historial_ingreso` (`id_historial`, `fecha_ingreso`, `hora_ingreso`, `comentario_historial`, `persona_num_documento`) VALUES (NULL, CURRENT_DATE(), CURRENT_TIME(), '$comentario', '$num_documento')";
    $consulta = $this->conexion->query($sql) or die('Ingreso no insertado');
    return $consulta;

  }

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

  public function consultarRetardo($num_documento){
    $sql="SELECT * FROM `historial_ingreso` INNER JOIN `persona` ON `historial_ingreso`.`persona_num_documento` = `persona`.`num_documento` 
    WHERE `persona`.`tipo_persona_id_tipo_persona` = 3 and `persona`.`num_documento` = $num_documento;";
    $consulta = $this->conexion->query($sql) or die('Error al consultar');
    return $consulta;

  }

  


}


?>
