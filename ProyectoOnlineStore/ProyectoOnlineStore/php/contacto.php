<?php
    session_start();

    if(isset($_POST['submit'])){
        correo();
    }else{
        echo "<script> alert('Hubo un error al enviar el correo') </script>";
        exit();
    }
    
    function correo(){

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = $_POST['correo'];
        $to = "admin@tonyromo.club";
        $subject = "Peticion de contacto";
        $message = $_POST['textarea'];
        $headers = "From:" . $to;
        
        mail($to,$subject,$message, $headers);
        
        //Formato despues de enviar el email
        header("Location: ../index.php#goodmail");
    }
?>