
<?php
    
     $server = 'db5011119284.hosting-data.io';
    $username = 'dbu1762074';
    $password = '$%!^@sport%SG%HSs';
    $db = 'dbs9393738';
    
    $conexion = mysqli_connect($server,$username,$password,$db);

    if(!$conexion){
        die('Conexion fallida');
    }

    else{
         //conexion exitosa

         /*revisar si traemos datos a insertar en la bd  dependiendo
         de que el boton de enviar del formulario se le dio clic*/

         if(isset($_POST['submit'])&& !empty($_POST['id'])){
                //obtenemos datos del formulario
                $id = $_POST['id'];
                $nom =$_POST['nombre'];
                $categoria =$_POST['categoria'];
                $descripcion =$_POST['descripcion'];
                $existencia = $_POST['existencia'];
                $precio = $_POST['precio'];
                $imagen = $_POST['imagen'];
                
                //hacemos cadena con la sentencia mysql para insertar datos
                $sql = "INSERT INTO productos (id, nombre, categoria, descripcion,existencia,precio,imagen) VALUES('$id','$nom','$categoria','$descripcion','$existencia','$precio','$imagen')";
                $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla productos de la base de datos
                if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                    echo '<script> alert("registro insertado") </script>';
                }//fin
             
              //continaumos con la consulta de datos a la tabla usuarios
         //vemos datos en un tabla de html
         $sql = 'select * from productos';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia

         if ($resultado -> num_rows){ //si la consulta genera registros
              echo '<div style="margin-left: 20px;">';
              echo '<table class="table table-hover" style="width:50%;">';
              
                echo '<tr>';
                    echo '<th>id</th>';
                    echo '<th>nombre</th>';
                    echo '<th>categoria</th>';
                    echo '<th>descripcion</th>';
                    echo '<th>existencia</th>';
                    echo '<th>precio</th>';
                    echo '<th>imagen</th>';
                echo '</tr>';
                while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla
                    echo '<tr>';
                        echo '<td>'. $fila['id'] . '</td>';
                        echo '<td>'. $fila['nombre'] . '</td>';
                        echo '<td>'. $fila['categoria'] . '</td>';
                        echo '<td>'. $fila['descripcion'] . '</td>';
                        echo '<td>'. $fila['existencia'] . '</td>';
                        echo '<td>'. $fila['precio'] . '</td>';
                        echo '<td>'. $fila['imagen'] . '</td>';
                    echo '</tr>';
                }   
                echo '</table">';
             echo '</div>';
         }
         else{
             echo "no hay datos";
         }
        
         }//fin 

        
         
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" href="../Img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
        td,
        th {
            padding: 10px;

        }
        
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
                    <h2>Registro de Usuarios</h2>
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="number" name="id" class="form-control" id="id" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" id="categoria" name="categoria" class="form-control" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="existencia">Existencia</label>
                        <input name="existencia" type="number" class="form-control" id="existencia" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input name="precio" type="text" class="form-control" id="precio" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input name="imagen" type="file" class="form-control" id="imagen" placeholder="">
                    </div>
                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                </form>
            </div> <!-- fin col -->
        </div> <!-- fin row -->
    </div> <!-- fin container -->
    <br><br>
</body>

</html>