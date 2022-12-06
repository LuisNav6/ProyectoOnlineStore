<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'db_sports';
    
    $conexion = mysqli_connect($server,$username,$password,$db);

    if(!$conexion){
        die('Conexion fallida');
    }
?>