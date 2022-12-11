<?php
    $server = 'db5011119284.hosting-data.io';
    $username = 'dbu1762074';
    $password = '$%!^@sport%SG%HSs';
    $db = 'dbs9393738';
    
    $conexion = mysqli_connect($server,$username,$password,$db);

    if(!$conexion){
        die('Conexion fallida');
    }
?>