<?php
    session_start();
    
    if($_SESSION['tempPass'] === $_POST['tempass']){
        header ("Location: ../index.php#updatePassword");
    }else{
        echo "<script> alert('Contraseña temporal no valida') </script>";
        header ("Location: ../index.php#temp");
    }
?>