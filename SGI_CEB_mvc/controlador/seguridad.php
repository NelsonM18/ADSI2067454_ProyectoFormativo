<?php
session_start();

if ($_SESSION["validar"]!="true") {
    header("location:../../index.php");
}

?>