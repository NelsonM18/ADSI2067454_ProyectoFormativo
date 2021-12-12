<?php
include_once ("conexion.php");

class estudiante extends conexion{

    public function consultarRetardo($num_documento){

        $sql="SELECT * FROM `historial_ingreso` INNER JOIN `persona` ON `historial_ingreso`.`persona_num_documento` = `persona`.`num_documento` 
        WHERE `persona`.`tipo_persona_id_tipo_persona` = 3 and `persona`.`num_documento` = $num_documento;";
        $consulta = $this->conexion->query($sql) or die('Documento Invalido');
        return $consulta;
      }
}

?>