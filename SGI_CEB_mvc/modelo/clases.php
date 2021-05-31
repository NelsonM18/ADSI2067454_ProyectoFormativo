<?php
include("conexion.php");

$objeto = new conexion; // se crea el objeto conexion para ejecutar la funcion constructor y poder usar sus variables

/**
 *
 */
class clases extends conexion{  //Se crea la clase clases que hereda de conexion para poder usar la variable conexion.


  public function crearPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos

    
    $sql = "INSERT INTO `persona` (`num_documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `grupo_sanguineo_id_grupo_sanguineo`, `tipo_documento_id_tipo_documento`, `tipo_persona_id_tipo_persona`, `genero_id_genero`) VALUES ('$num_documento', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$fecha_nacimiento', '$grupo_sanguineo', '$tipo_documento', '$tipo_persona', '$genero');";
    $consulta = $this->conexion->query($sql) or die('Persona no creada');
    return $consulta;
  }

  public function actualizarPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero, $num_documentoGET){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos

    
    $sql = "UPDATE `persona` SET num_documento = '$num_documento', primer_nombre = '$primer_nombre', segundo_nombre = '$segundo_nombre', primer_apellido = '$primer_apellido', segundo_apellido = '$segundo_apellido', fecha_nacimiento = '$fecha_nacimiento', grupo_sanguineo_id_grupo_sanguineo = '$grupo_sanguineo', tipo_documento_id_tipo_documento = '$tipo_documento', tipo_persona_id_tipo_persona = '$tipo_persona', genero_id_genero = '$genero' WHERE num_documento='$num_documentoGET';";
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

  public function listarPersonas(){ //Funcion para listar las personas del sistema

    $sql="SELECT * FROM persona
    INNER JOIN tipo_documento ON persona.tipo_documento_id_tipo_documento=tipo_documento.id_tipo_documento
    INNER JOIN grupo_sanguineo ON persona.grupo_sanguineo_id_grupo_sanguineo=grupo_sanguineo.id_grupo_sanguineo
    INNER JOIN tipo_persona ON persona.tipo_persona_id_tipo_persona=tipo_persona.id_tipo_persona
    INNER JOIN genero ON persona.genero_id_genero=genero.id_genero";
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

  
  public function traeGenero(){ //Funcion para listar los grupos sanguineos

    $sql="SELECT * FROM genero;";
    $consulta = $this->conexion->query($sql) or die('Error al traer la información');
    return $consulta;

  }

  


}


?>
