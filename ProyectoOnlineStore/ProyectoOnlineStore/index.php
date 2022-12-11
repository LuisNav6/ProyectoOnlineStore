<?php
    session_start();
	include 'php/database.php';
	
	if($_SESSION['cuenta'] == 'admin'){
    	 header('Location: php/menu.php');
    }else{
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTRNR</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="Img/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/estiloscarrito.css">
  	<link rel="stylesheet" href="css/estiloscarrusel.css">
  	<link rel="stylesheet" href="css/checkout.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="" class="logo">
            <img src="Img/logo.png" alt="logo">
            <h2>SPORTRNR</h2>
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Acerca de nosotros</a></li>
            <li><a href="#menu">Tienda</a></li>
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
            <?php if(isset($_SESSION['cuenta'])){ echo '<li><a href="#suscrip">Suscripciones</a></li>'; echo '<li style = "color:#FFE060;">'.$_SESSION['cuenta'].'</li> '; 
       		echo'<li>
                   <div class="container-icon">
                      <div class="container-cart-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="icon-cart">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                          </svg>
                          <div class="count-products">
                              <span id="contador-productos">0</span>
                          </div>
                      </div>
                      <div class="container-cart-products hidden-cart">
                          <div class="row-product">
                              <div class="cart-product">
                                  <div class="info-cart-product">
                                      <span class="cantidad-producto-carrito"></span>
                                      <p class="titulo-producto-carrito"></p>
                                      <span class="precio-producto-carrito"></span>
                                  </div>
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                      stroke="currentColor" class="icon-close">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                              </div>
                          </div>
                          <div class="cart-total hidden">
                              <h3>Total:</h3>
                              <span class="total-pagar">$0</span>
                              <div class="login-form__button-container">
                                  <a href="#checkout" class="btnN"> Pagar</a>
                              </div>
                          </div>
                          <p class="cart-empty">El carrito está vacío</p>
                      </div>
                  </div> 
            	
            </li>'; 
           echo '<li><a href="php/logout.php">Logout</a></li>';}else{echo '<li><a href="#modal" class="login">Iniciar sesión</a></li>';}?>
            <!-- Dark Mode -->
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
        <?php include "php/modals.php"; ?>
    </header>

    <!-- Home  Section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>¡Vistiendo<br> Campeones!</h1>
            <h2>Encuentra el mejor comfort<br>para tus actividades diarias.</h2>
          	<div class="btnProduc">
            	<a href="#menu" class="btn">Ver Productos</a>
            </div>
        </div>

        <div class="home-img">
          <div id="carrusel-contenido">
            <div id="carrusel-caja">
                <div class="carrusel-elemento">   
                    <img class="imagenes" src="Img/fotoInicio2.jpg">
                </div>
                <div class="carrusel-elemento">   
                    <img class="imagenes" src="Img/fotoInicio3.jpg">                        
                </div>
                <div class="carrusel-elemento">   
                    <img class="imagenes" src="Img/fotoInicio.jpeg">                        
                </div>
            </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Img/tienda.jpg" alt="">
        </div>
        <div class="about-text">
            <span>Acerca de Nosotros</span>
            <h2>¿Quiénes Somos?</h2>
            <p>Somos una empresa dedicada al 100% a la venta de productos deportivos, con el objetivo de ofrecerles a
                nuestros clientes un mejor comfort y sobre todo ayudar a su óptimo desempeño.</p>
          <h2>Misión</h2>
            <p>Buscamos lograr la satisfacción total de nuestros clientes, con nuestro excelente servicio profesional a clientes.
            </p>
            <h2>Visión</h2>
            <p>Convertirnos en la tienda deportiva mas grande a nivel internacional, haciendo llegar nuestros productos y servicios a cada rincon del mundo.</p>
    
            <h2>Objetivos</h2>
            <p>- Brindar el mejor servicio en linea. <br>
            - Ofrecer la mejor calidad y precios en nuestros productos. <br>
            - Anteponer la satisfaccion del cliente.
            </p>
        </div>
    </section>
    <!-- tienda-->
    <div class="heading" id = "filtros">
         <span>Tienda</span>
        <h2>Encuentra lo mejor para ti.</h2>
    </div>
    <section class="menu" id="menu">
      <div class="filtro-container">
        <p class="filtro_title">Selecciona los filtros deseados para encontrar los productos</p>
      </div>
          <form action="index.php#filtros" method="post" class="filtro-form">
            
            <div class="filtro-form">
                <div class="filtro_list">
                    <select name="filtro">
                        <option value="todos">Todos</option>
                        <option value="Niño">Niño</option>
                        <option value="Niña">Niña</option>
                        <option value="Dama">Dama</option>
                        <option value="Caballero">Caballero</option>
                        <option value="caros">Más caros</option>
                        <option value="economicos">Más baratos</option>
                    </select>
                </div>
                <div class="buttonFiltro-cont">
                    <button type="submit" class="btn">Filtrar</button>
                </div>
            
          </form>
        </div>
        <div class="menu-container">
        <?php
        if(isset($_POST['filtro'])){
            switch($_POST['filtro']){
            case "todos":
                $sql = "select * from productos;";
            break;
            case "Niño":
                $sql = "select * from productos where categoria='Niño'";
                break;
            case "Niña":
                $sql = "select * from productos where categoria='Niña'";
                break;
            case "Dama":
                $sql = "select * from productos where categoria='Dama'";
                break;
            case "Caballero":
                $sql = "select * from productos where categoria='Caballero'";
                break;
            case "caros":
                $sql = "select * from productos order by precio desc;";
                break;
            case "economicos":
                $sql = "select * from productos order by precio asc;";
                break;
            }
            }else{
            $sql = "select * from productos;";
            }
            $resultado = $conexion -> query($sql);
          $numPro = 0;
        ?>
<script> var array=[];var arr=[]; var ar=[];</script>

<?php
       srand(time());
       $a = rand(0,17);//el limite maximo es el numero total de articulos
       $b = rand(0,17);//el limite maximo es el numero total de articulos
       $c = rand(0,17);//el limite maximo es el numero total de articulos
       $d = rand(0,17);//el limite maximo es el numero total de articulos
       $e = rand(0,17);//el limite maximo es el numero total de articulos
       $f = rand(0,17);//el limite maximo es el numero total de articulos
    while( $fila = $resultado ->  fetch_assoc()){
        $imagen = $fila['imagen'];
        $producto = $fila['nombre'];
        $precio = $fila['precio'];
        $descripcion = $fila['descripcion']; 
        $categoria = $fila['categoria'];
        $existencia = $fila['existencia'];
?>
    <script>
    array.push("<?php echo $producto ?>");
    ar.push("<?php echo $categoria ?>");
    </script>

<?php 
     if($numPro == $a || $numPro == $b || $numPro == $c || $numPro == $d || $numPro == $e || $numPro == $f){
         $newprecio = $precio*0.9;
?>
<script>
     arr.push("<?php echo number_format($newprecio) ?>");
</script>
            <div class="box">
                <div class="box-img">
                    <img src="Img/<?php echo $imagen ?>">
                </div>
                <h2 id="nombre"><?php echo $producto ?></h2>
                <span style="color: gray; text-decoration:line-through;">$<?php echo $precio ?></span>
                <span style="color: green;" id="precio">$<?php echo number_format($newprecio)?></span>
              <span style="color: #03bb85;" >Existencia:</span><span id="existencia" style="color: #03bb85";><?php echo $existencia ?></span>
                <p style="text-align:left;">Descripción: </p><span style="text-align: center;"><?php echo $descripcion ?></span>
              	<i class='bx bx-cart-alt btn-add-cart'></i>
            </div>
<?php
     }else{
?>
<script>
     arr.push("<?php echo $precio ?>");
</script>
            <div class="box">
                <div class="box-img">
                    <img src="Img/<?php echo $imagen ?>">
                </div>
                <h2 id="nombre"><?php echo $producto ?></h2>
                <span id="precio">$<?php echo $precio ?></span>
                <span style="color: #03bb85;" >Existencia: </span><span id="existencia" style="color: #03bb85;"><?php echo $existencia ?></span>
                <p style="text-align:left;">Descripción: </p><span style="text-align:center;"><?php echo $descripcion ?></span>
              	<i class='bx bx-cart-alt btn-add-cart'></i>
            </div>
<?php 
}
    $numPro = $numPro+1;
    }//fin while
?>
</div>
</section>
    <!-- Service -->
    <section class="services" id="services">
        <div class="heading">
            <span>Servicios</span>
            <h2>Brindamos <br> el mejor servicio al cliente.</h2>
        </div>

        <div class="servives-container">
            <!-- Box 1 -->
            <div class="s-box">
                <img src="Img/seguridadpago.jpg" alt="">
                <h3>Pagos</h3>
                <p>Contamos con una de las pasarelas mas seguras en linea, que garantiza a nuestros clientes que su
                    informacion personal y sus datos bancarios están 100% protegidos.</p>
            </div>
            <!-- Box 2 -->
            <div class="s-box">
                <img src="Img/paqueteria.jpg" alt="">
                <h3>Paquetería</h3>
                <p>Contamos con el mejor servicio de paquetería, comprometiendonos con los clientes haciendoles llegar
                    sus entregas en tiempo y forma.</p>
            </div>
            <!-- Box 3 -->
            <div class="s-box">
                <img src="Img/delivery.jpg" alt="">
                <h3>Entregas</h3>
                <p>Nos encargamos de hacerles llegar a nuestros clientes cada uno de sus productos intactos.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="connect">
        <div class="connect-text">
            <span>Hablemos</span>
            <h2>Conectar ahora</h2>
        </div>
        <a href="#contacto" class="btn">Contactanos</a>
    </section>
  <section class="ubicacion">
        <div class="connect-text">
            <span>Ubicación</span>
            <h2>Encuentranos <br>en nuestra tienda fisica</h2>
        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3701.5680112655814!2d-102.31420629718653!3d21.91270471452848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1670719727179!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </section>
     
     <section class="acordion" id="acordion">
        <div class="connect-text">
            <span>Preguntas Frecuentes</span>
            <h2>Otros Usuarios <br>Tambien Han Preguntado...</h2>
        </div>
     <div class="accordion-container">
    <div class="set">
    <a class="aco" href="#acordion">
      ¿Las compras son seguras?
      <i class="fa fa-plus ac"></i>
    </a>
    <div class="content">
      <p class="acord_text">Sí, contamos con el mejor servicio delivery, haciendo entregas intactas.</p>
    </div>
  </div>
  <div class="set">
    <a class="aco" href="#acordion">
      ¿Se puede pagar en efectivo?
      <i class="fa fa-plus ac"></i>
    </a>
    <div class="content">
      <p class="acord_text">Contamos con un método de pago en OXXO, en el cual se te otorga un código de barras que vas a presentar en tu tienda OXXO más cercana.</p>
    </div>
  </div>
  <div class="set">
    <a class="aco" href="#acordion">
      ¿Cuanto se tarda en llegar mi pedido? 
      <i class="fa fa-plus ac"></i>
    </a>
    <div class="content">
      <p class="acord_text">La fecha de entrega puede variar dependiendo a la zona a la que se vaya a enviar.</p>
    </div>
  </div>
  <div class="set">
    <a class="aco" href="#acordion">
      ¿Cuando puedo usar mis cupones?
      <i class="fa fa-plus ac"></i> 
    </a>
    <div class="content">
      <p class="acord_text"> El cupon lo puedes usar en cualquier momento siempre y cuando tengan vigencia y apliuquen los terminos y condiciones. </p>
    </div>
  </div>
</div>
<script src="js/acord.js"></script>
     </section>
    <footer class="contact" id="contact">
        <div class="contact-box">
            <h3>SPORTRNR</h3>
            <span>Conectate con nosotros</span>
            <div class="social">
                <a href="#" class="icon"><i class='bx bxl-facebook facebook'></i></a>
                <a href="#" class="icon"><i class='bx bxl-twitter twitter'></i></a>
                <a href="https://www.instagram.com/sportrnr/" class="icon"><i
                        class='bx bxl-instagram instagram'></i></a>
            </div>
        </div>

        <div class="contact-box">
            <h3>Enlaces del menú</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Acerca de nosotros</a></li>
            <li><a href="#menu">Cursos</a></li>
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
        </div>

        <div class="contact-box">
            <h3>Enlaces Rápidos</h3>
            <li><a href="#Contact">Contacto</a></li>
            <li><a href="#Privacy Policy">Politica y Privacidad</a></li>
            <li><a href="#Terms Of Use">Terminos de uso</a></li>
        </div>

        <div class="contact-box address">
            <h3>Contacto</h3>
            <i class='bx bxs-map'><span>Av. Universidad # 940, <br> C.P. 20100, Aguascalientes, Ags.
                    México.</span></i>
            <i class='bx bxs-phone'><span>+52 449 571 6261</span></i>
            <i class='bx bxs-envelope'><span>admin@tonyromo.club</span></i>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="copyright">
        <p>© Derechos Reservados Por SPORTRNR.</p>
    </div>
    
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="js/script.js"></script>
  	<script src="js/checkout.js"></script>
    <script src="js/formularioRegistro.js"></script>
           <!-- link js -->
     <script src="js/index.js"></script> <!-- carrito -->
    <script src="https://kit.fontawesome.com/850ac5ea56.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
          }
?>