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

        // Agarramos la ip del usuario
        function getUserIpAddr(){  
            if(!empty($_SERVER['HTTP_CLIENT_IP'])){  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
            }else{  
              $ip = $_SERVER['REMOTE_ADDR'];  
            }  
            return $ip;  
        }

        include 'functions.php';

        $time = time()-30; // 30 sec
        $ip_address = getUserIpAddr();
        $check_attmpt = mysqli_fetch_assoc(mysqli_query($conexion,"SELECT COUNT(*) AS total_count FROM attempt_count WHERE time_count > $time AND ip_address = '$ip_address'"));
        //print_r($check_attmpt);
        $total_count = $check_attmpt['total_count'];
        
        if($total_count == 3){
            $band = true;
            $bloqueado = mysqli_query($conexion,"UPDATE inicio_sesion SET bloqueado = '$band' WHERE cuenta ='$uname'");
            header("Location: ../index.php#bloq");
        }else{
            $uname = validate($_POST['fm_username']);
            $pass = validate($_POST['fm_password']);

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
                            $_SESSION['nameAccount'] = $uname;
                            header("Location: ../index.php#bloq");
                        }else if(strcasecmp($_SESSION['captcha'], $_POST['securityCode']) != 0){
                            header("Location: ../index.php#errorCapt");
                        }else{
                            if ($row['cuenta'] === $uname && decryptthis($row['password'],$key) === $pass) {
                                    $delete_query = mysqli_query($conexion,"DELETE FROM attempt_count WHERE ip_address ='$ip_address'");

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
 
                                    header("Location: ../index.php");
                                    exit();
                            }else{
                                $total_count ++;
                                $time_remain = 3 - $total_count;
                                $time = time();
                                if($time_remain == 0){
                                    $band = true;
                                    $bloqueado = mysqli_query($conexion,"UPDATE inicio_sesion SET bloqueado = '$band' WHERE cuenta ='$uname'");
                                    $_SESSION['nameAccount'] = $uname;
                                    header("Location: ../index.php#bloq");
                                }else{
                                    $_SESSION['attempts'] = $time_remain;
                                    header("Location: ../index.php#bloqattempts");
                                }
                                // Insertamos datos en attempt_count
                                mysqli_query($conexion,"INSERT INTO attempt_count (ip_address, time_count) VALUE ('$ip_address', '$time')");
                                //header("Location: ../index.php#attemp");
                            }   
                        }
                    }else{
                        header("Location: ../index.php#errorUsr");
                    }
                }else{
                    header("Location: ../index.php#errorCapt");
                }
            }
    }else{
        echo "<script> alert('No se pudo iniciar la sesion') </script>";
        exit();
    }
?>