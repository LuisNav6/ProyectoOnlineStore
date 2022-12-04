<?php
    session_start();
    
    if($_SESSION['tempPass'] === $_POST['tempass']){
        header ("Location: updateAccount.php");
    }else{
        echo "<script> alert('Contraseña temporal no valida') </script>";
        echo '<a href="newPassword.php"> Intentar de new </a>';
    }
?>