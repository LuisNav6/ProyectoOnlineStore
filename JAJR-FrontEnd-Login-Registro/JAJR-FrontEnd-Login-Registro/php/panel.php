<?php
    session_start();

    if(!isset($_SESSION['cuenta'])){
        echo "<script> alert('No se pudo ingresar a la cuenta ".$_SESSION['cuenta']."')</script>";
        echo "<a href='logout.php'>Desconectar </a>";
    }else{
        echo "<script> alert('Se ingreso correctamente a ".$_SESSION['cuenta']."')</script>";
        echo "<a href='../index.php#modal'>Regresar </a>";
        echo "<br>";
        echo "<a href='logout.php'>Desconectar </a>";
        //header("Location: ../index.php");
    }
?>

