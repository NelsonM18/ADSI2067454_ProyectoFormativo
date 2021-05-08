<?php

session_start();

if ($_SESSION["validar"]=="true") {
    session_destroy();
    header("location:../index.php");
}

?>