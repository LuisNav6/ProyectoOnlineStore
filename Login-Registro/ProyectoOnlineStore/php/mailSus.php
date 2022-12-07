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
        $pattern = "1234567890";
        for($i=0;$i<$length;$i++) {
            $keyRand .= $pattern[rand(0,8)];
        }
    
        return $keyRand;
    }
    
    function correo(){
        //Generamos un cupon aleatorio
        $_SESSION['cupon'] = randomText(2);

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "pp.tony777@gmail.com";
        $to = $_POST['correo'];
        $subject = "Verificando mail";
        $message = "Buenos dias estimado usuario, gracias por suscribirse, aqui esta su cupon de descuento: ".$_SESSION['cupon']." ";
        $headers = "From:" . $from;
        
        mail($to,$subject,$message, $headers);
        
        //Formato despues de enviar el email
        header("Location: ../index.php#goodmail");
    }
?>