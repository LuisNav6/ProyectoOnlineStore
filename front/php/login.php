<?php 
    session_start(); 
    include "database.php";

    if (isset($_POST['fm_username']) && isset($_POST['fm_password']) && isset($_POST['submit'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        include 'functions.php';
        // Contamos cuantas veces intento logearse
        $ip = $_SERVER['REMOTE_ADDR'];
        $login_time = time()-15;
        $login_attempts = mysqli_query($conexion,"SELECT COUNT(*) AS total_count FROM ip_details WHERE ip='$ip' AND login_time > '$login_time'");
        $res = mysqli_fetch_assoc($login_attempts);
        $count = $res['total_count'];
        
        if($count == 3){
            $band = true;
            $bloqueado = mysqli_query($conexion,"UPDATE inicio_sesion SET bloqueado = '$band' WHERE cuenta ='$uname'");
            header("Location: comeBack.php");
        }else{
            $uname = validate($_POST['fm_username']);
            $pass = validate($_POST['fm_password']);

            $message = '';
        
                if (empty($uname)) {
                    echo "<script> alert('Usuario requerido') </script>";
                    exit();
                }else if(empty($pass)){
                    echo "<script> alert('Contraseña requerida') </script>";
                    exit();
                }else if(isset($_POST['securityCode']) && ($_POST['securityCode']!="")){

                    $sql = "SELECT cuenta, password, bloqueado FROM inicio_sesion WHERE cuenta = '$uname'";
                    $result = mysqli_query($conexion, $sql);
                    
                    if($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);

                        if($row['bloqueado'] == true){
                            echo "<script> alert('Usuario Bloqueado') </script>";
                            echo '<a href="recovery.php"> Recuperar contraseña </a> <br>';
                            echo '<a href="../index.php#modal"> Volver </a>';
                            $_SESSION['nameAccount'] = $uname;
                        }else if(strcasecmp($_SESSION['captcha'], $_POST['securityCode']) != 0){
                            echo "<script> alert('Captcha invalido') </script>";
                            echo '<a href="../index.php#modal"> Volver </a>';
                            $message = "¡El texto introducido es incorrecto! Intente de nuevo.";
                        }else{
                            if ($row['cuenta'] === $uname && decryptthis($row['password'],$key) === $pass) {
                                    $delete_query = mysqli_query($conexion,"DELETE FROM ip_details WHERE ip='$ip'");

                                    // Generamos variable de usuario
                                    $_SESSION['cuenta'] = $row['cuenta'];
                                    $_SESSION['name'] = $row['nombre'];
                                    // Almacenamos el user/pass en cookies
                                    if(isset($_POST['fm_remember'])){
                                        setcookie("usuario",$uname,time()+(60*60),"/");
                                        setcookie("pass",$pass,time()+(60*60),"/");
                                    }else{
                                        setcookie("usuario","",time()- 60,"/");
                                        setcookie("pass","",time() - 60,"/");
                                    }

                                    $message = "El texto introducido es correcto."; 
                                    header("Location: panel.php");
                                    exit();
                            }else{
                                $count ++;
                                $remaining_attempts = 3 - $count;
                                if($remaining_attempts == 1){
                                    $band = true;
                                    $bloqueado = mysqli_query($conexion,"UPDATE inicio_sesion SET bloqueado = '$band' WHERE cuenta ='$uname'");
                                    header("Location: comeBack.php");
                                    $_SESSION['nameAccount'] = $uname;
                                }else{
                                    echo "<script> alert('Usuario y/o nombre incorrecto intento te quedan ".$remaining_attempts." intentos') </script>";
                                    echo '<a href="../index.php#modal"> Volver </a>';
                                    $ip = $_SERVER['REMOTE_ADDR'];
                                    $login_time = time();
                                    $insert_query = mysqli_query($conexion,"INSERT INTO ip_details SET ip = '$ip', login_time='$login_time'");
                                }
                                
                                //header("Location: ../index.php#modal");
                                exit();
                            }   
                        }
                    }else{
                        echo "<script> alert('Usuario y/o nombre incorrecto') </script>";
                        echo '<a href="../index.php#modal"> Volver </a>';
                        exit();
                    }
                }else{
                    echo "<script> alert('Coloque el captcha') </script>";
                    echo '<a href="../index.php#modal"> Volver </a>';
                    $message = "Introduzca el texto que se ve en la imagen"; 
                }
            
        }
    }else{
        echo "<script> alert('No se pudo iniciar la sesion') </script>";
        exit();
    }
?>