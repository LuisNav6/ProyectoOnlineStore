<?php
    session_start();

    include 'database.php';

    if(isset($_POST['submit'])){
        srand(time());
        correo();
        $x = rand(1,100);
        $cupon = $_SESSION["cupon"];
        $sql = "INSERT INTO cupones (id_cupon,descuento) VALUE ('$cupon','$x')";
        $result = mysqli_query($conexion,$sql);
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
        //Generamos un cupon aleatorio
        $_SESSION['cupon'] = randomText(6);

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "admin@tonyromo.club";
        $to = $_POST['correo'];
        $subject = "Verificando mail";
        $message = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mensaje</title>

        <style>
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            .container {
            max-width: 1000px;
            width: 90%;
            margin: 0 auto;
            }
            .bg-dark {
            background: #343a40;
            margin-top: 40px;
            padding: 20px 0;
            }
            .alert {
            font-size: 1.5em;
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 2rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            }

            .alert-primary {
            color: #fff;
            background-color: #03BB85;
            border-color: #02432f;
            }

            .img-fluid {
            max-width: 100%;
            height: auto;
            }

            .mensaje {
            width: 80%;
            font-size: 20px;
            margin: 0 auto 40px;
            color: #eee;
            }

            .texto {
            margin-top: 20px;
            }

            .footer {
            width: 100%;
            background: #48494a;
            text-align: center;
            color: #ddd;
            padding: 10px;
            font-size: 14px;
            }

            .footer span {
            text-decoration: underline;
            }
            
        </style>
        </head>
        <body>
        <div class="container">
            <div class="bg-dark">
            <div class="alert alert-primary">
                <strong>Mensaje de: </strong> '.$_SESSION['cuenta'].'
            </div>
            <div class="mensaje">
                <div class="texto">ID cupon: '.$_SESSION['cupon'].'</div>
            </div>

            </div>
        </div>
        </body>
        </html>';
        
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers .= "Content-type:text/html;Charset=UTF-8"."\r\n";
        $headers .= "From:" . $from ."\r\n";
        //$headers .= "Content-Type: text/html;Charset=ISO-8859-1"."\r\n";
        
        mail($to,$subject,$message, $headers);
        
        //Formato despues de enviar el email
        header("Location: ../index.php#goodmail");
    }
?>