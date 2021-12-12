<?php
@session_start();
if ($_SESSION["permisos"]=="admin") {
    header("location:admin/indexadmin.php");

}
elseif ($_SESSION["permisos"]=="vigilante" || $_SESSION["permisos"]=="profesor" || $_SESSION["permisos"]=="personal_admin") {

}
else {
    header("location:../index.php");
}




?>