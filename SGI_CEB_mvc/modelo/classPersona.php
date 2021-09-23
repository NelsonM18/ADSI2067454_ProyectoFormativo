<?php 
include_once ("conexion.php");

class persona extends conexion{

    public function crearPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos

        $sql = "INSERT INTO `persona` (`num_documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `grupo_sanguineo_id_grupo_sanguineo`, `tipo_documento_id_tipo_documento`, `tipo_persona_id_tipo_persona`, `genero_id_genero`, estado_id_estado) VALUES ('$num_documento', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$fecha_nacimiento', '$grupo_sanguineo', '$tipo_documento', '$tipo_persona', '$genero', '1');";
        $consulta = $this->conexion->query($sql) or die('Persona no creada');
        return $consulta;
    }


    public function eliminarPersona($num_documentoGET){ //Funcion de la clase Clases que sirve para eliminar una persona nuevo a la base de datos

        $sql = "DELETE FROM `persona` WHERE num_documento='$num_documentoGET';";
        $consulta = $this->conexion->query($sql) or die('Error');
        return $consulta;
    }
    
    
    public function actualizarPersona($num_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $grupo_sanguineo, $tipo_documento, $tipo_persona, $genero, $num_documentoGET){ //Funcion de la clase Clases que sirve para insertar una persona nuevo a la base de datos

        $sql = "UPDATE `persona` SET num_documento = '$num_documento', primer_nombre = '$primer_nombre', segundo_nombre = '$segundo_nombre', primer_apellido = '$primer_apellido', segundo_apellido = '$segundo_apellido', fecha_nacimiento = '$fecha_nacimiento', grupo_sanguineo_id_grupo_sanguineo = '$grupo_sanguineo', tipo_documento_id_tipo_documento = '$tipo_documento', tipo_persona_id_tipo_persona = '$tipo_persona', genero_id_genero = '$genero' WHERE num_documento='$num_documentoGET';";
        $consulta = $this->conexion->query($sql) or die('Error');
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



    //Metodos que no estan en el diagrama de clases.

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

    public function validarPersona($dato1){ //Funcion para consultar si un usuario existe en la base de datos SOLO por medio del correo registrado

        $sql="SELECT * FROM persona where num_documento='$dato1'";
        $consulta = $this->conexion->query($sql) or die('Persona ya existe');
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

}
?>