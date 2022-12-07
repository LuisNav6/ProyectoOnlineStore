<?php
    /* Registro */
    include 'database.php';
    error_reporting(0);

    $name = $_POST["nombre"];
    $username = $_POST["usuario"];
    $password = $_POST["password"];
    $cpassword = $_POST["password2"];
    $email = $_POST["correo"];
    $tel = $_POST['telefono'];
    $bloqueado = false;

    function randomText($length) {
        $keyRand="";
        $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
        for($i=0;$i<$length;$i++) {
            $keyRand .= $pattern[rand(0,35)];
        }

        return $keyRand;
    }

    include 'functions.php';

    // Datos encriptados
    $passwordEncrypted = encryptthis($password,$key);

    $id = randomText(6);

    $sql = "SELECT * FROM inicio_sesion WHERE cuenta = '$username' AND password = '$passwordEncrypted'";
    $validando = mysqli_query($conexion,$sql);

    if($validando->num_rows > 0){
        echo "<script> Ya existe ese nombre </script>";
    }else{
        $sql = "INSERT INTO inicio_sesion (id,nombre,correo,cuenta,password,bloqueado,Telefono) VALUE ('$id','$name','$email','$username','$passwordEncrypted','$bloqueado','$tel')";
        $result = mysqli_query($conexion,$sql);
    }
    
?>