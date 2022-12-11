<?php
    session_start();

    include 'database.php';
    include 'functions.php';

    if(isset($_POST['submit'])){
        if($_POST['newpass'] == $_POST['newpass2']){
            
            $newPass = $_POST['newpass'];

            // Encriptamos la nueva password
            $NewpasswordEncrypted = encryptthis($newPass,$key);

            $account = $_SESSION['nameAccount'];

            // Actualizamos los datos
            $sql = "SELECT * FROM inicio_sesion WHERE cuenta = '$account'";
            $consultar = mysqli_query($conexion,$sql);

            if($consultar->num_rows > 0){ 
                $row = mysqli_fetch_assoc($consultar);
                if($row['cuenta'] === $account){
                    $band = false;
                    $update = mysqli_query($conexion,"UPDATE inicio_sesion SET bloqueado = '$band', password = '$NewpasswordEncrypted' WHERE cuenta = '$account' ");
                    header("Location: ../index.php#good");
                }
            }else{
                echo "<script> alert('Error al actualizar los datos') </script>";
            }
        }else{
            echo "<script> alert('Las contraseñas no son iguales') </script>";
            echo '<a href="updateAccount.php"> Reintentar </a>';
        }
        
    }else{
        echo "<script> alert('Hubo un error al enviar la contraseña') </script>";
        exit();
    }
?>