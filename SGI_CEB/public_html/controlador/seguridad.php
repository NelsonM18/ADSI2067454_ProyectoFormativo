<?php
@session_start();


if (isset($_SESSION['validar'])) {
    if ($_SESSION["validar"]!="true") {
        header("location:https://sgi-ceb.000webhostapp.com/");
    }
}
else {
    echo "<script>alert('La sesion no esta iniciada'); window.location='https://sgi-ceb.000webhostapp.com/';</script>";
}

?>