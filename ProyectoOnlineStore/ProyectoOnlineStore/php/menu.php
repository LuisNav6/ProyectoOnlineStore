<?php
    session_start();
    if($_SESSION['cuenta'] == 'admin'){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="../Img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu ABC</title>
    <style>
      *{
        font-family: "Poppins", sans-serif;
      }
        .container{
            background-color: #03bb85;
            padding: 20px;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            margin-top: 20%;
            margin-left: 32%;
            border-radius: 20px;
            color: #1e1c2a;
        }
        .box{
           background-color: white;
            border-radius: 10px;
            padding: 5px;
            transition: 0.2s;
        }
        .box:hover{
         transform: scale(1.1);
        }
    </style>
</head>
<body>
    <section class="container">
      <div class="altas"> 
         <a href="altas.php" target="_blank" style="text-decoration: none; color:  #1e1c2a;">
           <div class="box">
               altas
           </div>
         </a>
      </div>
      <div class="bajas"> 
        <a href="bajas.php" target="_blank"  style="text-decoration: none; color:  #1e1c2a;">
          <div class="box">
             bajas
          </div>
        </a>
      </div>
      <div class="cambios"> 
        <a href="cambios.php" target="_blank" style="text-decoration: none; color:  #1e1c2a;">
         <div class="box">
            cambios
         </div>
        </a>
      </div>
      <div class="graficas"> 
        <a href="graficas.php" target="_blank" style="text-decoration: none; color:  #1e1c2a;">
         <div class="box">
            graficas
         </div>
        </a>
      </div>
      <div class="logout"> 
         <a href="logout.php" target="_blank" style="text-decoration: none; color:  #1e1c2a;">
           <div class="box">
               Logout
           </div>
         </a>
      </div>
    </section>
</body>
</html>

<?php
    }else{
        header("Location: ../index.php");
    }
?>