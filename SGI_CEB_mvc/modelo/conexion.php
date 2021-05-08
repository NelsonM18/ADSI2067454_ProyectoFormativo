<?php

class conexion{

  public function __construct(){

    $this->conexion = new mysqli("localhost","root","","sgi_ceb");

    if ($this->conexion->connect_errno) {

      die("Error en la conexion").$this->conexion->connect_errono;
    }
  }
}

?>
