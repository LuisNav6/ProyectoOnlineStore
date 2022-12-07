<?php
    session_start();

    if(isset($_POST['submit'])){
        correo();
    }else{
        echo "<script> alert('Hubo un error al enviar el correo') </script>";
        exit();
    }

    // Funciones
    function randomText($length) {
        $keyRand="";
        $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
        for($i=0;$i<$length;$i++) {
            $keyRand .= $pattern[rand(0,35)];
        }
    
        return $keyRand;
    }
    
    function correo(){
        //Generamos la contraseña temporal
        $_SESSION['tempPass'] = randomText(6);

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "pp.tony777@gmail.com";
        $to = $_POST['correo'];
        $subject = "Verificando mail";
        $message = "Buenos dias estimado usuario, aqui esta la contraseña temporal que le vamos a otorgar: ".$_SESSION['tempPass']." ";
        $headers = "From:" . $from;
        
        mail($to,$subject,$message, $headers);
        
        //Formato despues de enviar el email
        header("Location: ../index.php#temp");
    }
?>