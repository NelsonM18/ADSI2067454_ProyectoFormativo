<?php

class conexion{

  public function __construct(){

    $this->conexion = new mysqli("localhost","id18010578_root","@Da3144543191","id18010578_sgi_ceb");

    if ($this->conexion->connect_errno) {

      die("Error en la conexion").$this->conexion->connect_errono;
    }
  }
}

?>
