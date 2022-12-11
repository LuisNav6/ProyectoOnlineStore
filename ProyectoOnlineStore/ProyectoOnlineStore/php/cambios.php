<?php
   session_start();
     
     $server = 'db5011119284.hosting-data.io';
    $username = 'dbu1762074';
    $password = '$%!^@sport%SG%HSs';
    $db = 'dbs9393738';
    
    $_SESSION['id'] = '';
    $_SESSION['nom'] = '';
    $_SESSION['cat'] = '';
    $_SESSION['des'] = '';
    $_SESSION['exis'] = '';
    $_SESSION['pres'] = '';
    $_SESSION['imgn'] = '';
   
 $conexion = mysqli_connect($server,$username,$password,$db);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    //completar <------------------------------------------------------------------------------->
          if(isset($_POST['submit']))
          {
            $modificar = $_POST['modificar'];
            $_SESSION['modificar2'] = $modificar;
            $sql2 = "SELECT * FROM productos WHERE id='$modificar'";
            $resultado = $conexion ->query($sql2);
            while($fila = $resultado -> fetch_assoc())
            {
                $_SESSION['id'] = $fila['id'];
                $_SESSION['nom'] = $fila['nombre'];
                $_SESSION['cat'] = $fila['categoria'];
                $_SESSION['des'] = $fila['descripcion'];
                $_SESSION['exis'] = $fila['existencia'];
                $_SESSION['pres'] = $fila['precio'];
                $_SESSION['imgn'] = $fila['imagen'];
            }
          }

          if(isset($_POST['mod']))
          {
              $uno = $_POST['id2'];
              $dos = $_POST['nombre2'];
              $tres = $_POST['categoria2'];
              $cuatro = $_POST['descripcion2'];
              $cinco = $_POST['existencia2'];
              $seis = $_POST['precio2'];
              $siete = $_POST['imagen2'];
              $modificar1 = $_SESSION['modificar2'];

              $ne = "UPDATE productos SET id='$uno', nombre='$dos', categoria='$tres', descripcion='$cuatro', existencia='$cinco', precio='$seis', imagen='$siete' WHERE id='$modificar1'";
              $fin = $conexion -> query($ne);
          }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../Img/logo.png">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    
   
</head>
<body>
    
    <div class="contenedor1">
        <div class="contenedor2">
            <div class="izquierdaAlta">

            <?php        
         //continuamos con la consulta de datos a la tabla usuarios
         //vemos datos en un tabla de html
         $sql = 'select * from productos';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia
         
         if ($resultado -> num_rows){ //si la consulta genera registros
         ?>
 
                
          <div class="izqAlta">      
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
            
           <legend style="text-align: center;">Modificar Cuentas</legend>
                <br>
                <select   class="custom-select" name='modificar' >
                
                <?php
                $salida='<table style="text-align:center;">';
                while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos de la tabla
                    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
                    //proceso de concatenacion de datos
                    $salida.= '<tr>';
                    $salida.= '<td>'. $fila['id'] . '</td>';
                    $salida.= '<td>'. $fila['nombre'] . '</td>';
                    $salida.= '<td>'. $fila['categoria'] . '</td>';
                    $salida.= '<td>'. $fila['descripcion'] . '</td>';
                    $salida.= '<td>'. $fila['existencia'] . '</td>';
                    $salida.= '<td>'. $fila['precio'] . '</td>';
                    $salida.= '<td>'. $fila['imagen'] . '</td>';
                    $salida.= '</tr>';
                    }//fin while   
                    $salida.= '</table>';
                ?>
                </select>
                <br><br>
                <button id="btn" type="submit" value="submit" name="submit">Modificar</button>               
            </form>
            </div> 
         <?php
        
         }
         else{
             echo "no hay datos";
         }
        
?>
        </div>
            <div class="izquierdaBaja">
                 <?php echo $salida ?>
            </div>
        </div>
        <div class="derecha">
        
            <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
            <ul class="wrapper">
                <li class="form-row">
                <label for="id">ID</label>
                <input type="number" name="id2" id="id" value="<?php echo $_SESSION["id"]; ?>" >
                </li>
                <li class="form-row">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre2" value="<?php echo $_SESSION["nom"]; ?>">
                </li>
                <li class="form-row">
                <label for="categoria">CATEGORIA</label>
                <input type="text" id="categoria" name="categoria2" value="<?php echo $_SESSION["cat"]; ?>">
                </li>
                <li class="form-row">
                <label for="descripcion">DESCRIPCION</label>
                <input type="text" id="descripcion" name="descripcion2" value="<?php echo $_SESSION['des']; ?>">
                </li>
                <li class="form-row">
                <label for="existencia">EXISTENCIA</label>
                <input type="number" id="existencia" name="existencia2" value="<?php echo $_SESSION['exis']; ?>">
                </li>
                <li class="form-row">
                <label for="precio">PRECIO</label>
                <input type="text" id="precio" name="precio2" value="<?php echo $_SESSION['pres']; ?>">
                </li>
                <li class="form-row">
                <label for="imagen">IMAGEN</label>
                <input type="file" id="imagen" name="imagen2" value="<?php echo $_SESSION['imgn']; ?>">
                </li>
                <li class="form-row">
                <button id="btn" type="submit" name="mod">Modificar</button>
                </li>
            </ul>
            </form>       
        </div>
    </div>
</body>
</html>