<!-- pasamos codigo --> 
<?php 
     $server = 'db5011119284.hosting-data.io';
    $username = 'dbu1762074';
    $password = '$%!^@sport%SG%HSs';
    $db = 'dbs9393738';
    
    $conexion = mysqli_connect($server,$username,$password,$db);

    if(!$conexion){
        die('Conexion fallida');
}else{
    //conexion exitosa
    if(isset($_POST['submit']))
    {
        //obtenemos los datos del formulario
        $eliminar = $_POST['eliminar'];
        //hacemos la cadena con la sentencia mysql para eliminar 
        $sql = "DELETE FROM productos WHERE id='$eliminar'";
        $conexion->query($sql);
        if($conexion->affected_rows >= 1)//revisamos que se elimino con exito
        {
           echo '<br> Registro borrado <br>';
        }//fin
    }//fin

    //continuamos con la consulta de datos a la tabla usuarios
    //vemos dartos en una tabla de html
    $sql = 'select * from productos';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
    $resultado = $conexion -> query($sql);//aplicamos sentencia

    if($resultado -> num_rows)//si la consulta genera registros
    {
      ?>
      <div> 
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
          <legend>Eliminar articulo</legend>
          <br>
          <select class="Browser-default custom-select" name="eliminar">
              <?php
              while($fila = $resultado -> fetch_assoc())//recorremos los registros obtenidos de la tabla
              {
                echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
              }
              ?>
          </select>
          <br><br>
          <button type="submit" value="submit" name="submit">Eliminar</button>
        </form>
      </div>
      <?php
    }
    else{
        echo "no hay datos";
    }
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
     
    <style>
    div{
   
   width:20%;
 }
 body{
     margin:50px;
 }
    </style>
</head>
<body>
</body>
</html>