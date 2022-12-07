<?php

$servidor='localhost'; //todos estos datos se cambiarán acorde a la bd que se vaya a usar
$cuenta='id19790264_root';
$password='Productosdatabase1.';
$bd='id19790264_dbproductos';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'select * from productos';
$resultado = $conexion -> query($sql);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTRNR</title>
    <!--Favicon-->

    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="icon" type="" href="" />

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link To CSS -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="" class="logo">
            <img src="" alt="">
            <h2>SPORTRNR</h2>
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Acerca de nosotros</a></li>
            <li><a href="#menu">Productos</a></li>
            <li><a href="#menu">Tienda</a></li>
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
            <li><a href="#" class="login">Iniciar sesión</a></li>
            <!-- Dark Mode -->
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
        <!--Modal login-->
        <div class="modal">
            <div class="modal__container">
                <h2 class="modal__title">¡Inicia Sesión!</h2>
                <form class="form" action="verificacion.php" method="post">
                    <p><label for="username">Usuario</label> </p>
                    <p> <input type="text" name="username"> </p>
                    <p> <label for="password">password</label> </p>
                    <p>
                        <input type="password" name="password">
                    </p>
                    <p><label class="form-check-label" for="remember">Recordar</label></p>
                    <p> <input class="remember" type="checkbox" name="remember"></p>

                    <p><input class="send" type="submit" value="Ingresar"> </p>
                </form>
                <a href="#" class="modal__close">Cerrar</a>
            </div>
        </div>

        <script>
            const openModal = document.querySelector('.login');
            const modal = document.querySelector('.modal');
            const closeModal = document.querySelector('.modal__close');

            openModal.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.add('modal--show');
            });

            closeModal.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.remove('modal--show');
            });
        </script>

    </header>



    <!-- Home  Section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>¡Vistiendo<br> Campeones!</h1>
            <h2>Encuentra el mejor comfort<br>para tus actividades diarias.</h2>
            <a href="#menu" class="btn">Ver Cursos</a>
        </div>

        <div class="home-img">
            <img src="Img/AdidasX1.jpg" alt="">

        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Img/tienda.jpg" alt="">
        </div>
        <div class="about-text">
            <span>Acerca de Nosotros</span>
            <h2> <br></h2>
            <p>Somos una empresa dedicada al 100% a la venta de productos deportivos, con el objetivo de ofrecerles a
                nuestros clientes un mejor comfort y sobre todo ayudar a su óptimo desempeño.</p>
            <a href="#" class="btn">Ver más</a>
        </div>
    </section>

    <!-- Menu -->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Productos</span>
            <h2>¡Lo más nuevo!</h2>
        </div>
        <div class="menu-container">
            <!-- Box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/AdidasX1.jpg" alt="">
                </div>
                <h2>Adidas X Speedportal</h2>
                <h3></h3>
                <span>$9,999.00</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/pantsHombre.jpeg" alt="">
                </div>
                <h2>Pants Adidas Hombre</h2>
                <h3></h3>
                <span>$1499.00</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/bandasDama.jpeg" alt="">
                </div>
                <h2>Bandas Multicolores para Dama</h2>
                <h3></h3>
                <span>$679.00</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/playeraNiño.jpeg" alt="">
                </div>
                <h2>Playera Niño</h2>
                <h3></h3>
                <span>$650.00</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
    </section>
    <!-- tienda-->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Tienda</span>
            <h2>Encuentra lo mejor para ti.</h2>
        </div>
        <div class="menu-container">
        <?php
          $numPro = 0;
        ?>
<script> var array=[];var arr=[]; var ar=[];</script>
 
<?php
       srand(time());
       $x = rand(0,1);//el limite maximo es el numero total de articulos
    while( $fila = $resultado ->  fetch_assoc()){
        $imagen = $fila['imagen'];
        $producto = $fila['nombre'];
        $precio = $fila['precio'];
        $descripcion = $fila['descripcion']; 
        $categoria = $fila['categoria'];
?>
    <script>
    array.push("<?php echo $producto ?>");
    ar.push("<?php echo $categoria ?>");
    </script>

<?php 
     if($numPro == $x){
         $newprecio = $precio*0.9;
?>
<script>
     arr.push("<?php echo $newprecio ?>");
</script>
            <div class="box">
                <div class="box-img">
                    <img src="Img/<?php echo $imagen ?>">
                </div>
                <h2><?php echo $producto ?></h2>
                <h3></h3>
                <span style="color: gray;"><del>$<?php echo $precio ?></del></span>
                <span style="color: green;"><?php echo $newprecio?></span>
                <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
                <i class='bx bx-cart-alt'></i>
                 </button>
            </div>
        </form>
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
                <h2><?php echo $producto ?></h2>
                <h3></h3>
                <span>$<?php echo $precio ?></span>
                <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
                <i class='bx bx-cart-alt'></i>
                 </button>
            </div>
            </form>
        </div>
    </section>

<?php } ?>
<?php
    $numPro = $numPro+1;
    }//fin while
?>

<script>
    console.log(array); 
    console.log(arr);
    console.log(ar);
    let carrito = [];
    let carritochido = [];
    function agregar(id){
        var indice = parseInt(id);
        console.log(`Elegiste ${array[indice]}`);
       carrito.push(`${array[indice]}`,`${arr[indice]}`,`${ar[indice]}`);
    }
    carritochido.push(carrito);
    console.log(carritochido);
    console.log(carrito);
</script>

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
                <p>Contamos con una de las pasarelas más seguras en línea, que garantiza a nuestros clientes que su
                    información personal y sus datos bancarios estén 100% protegidos.</p>
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

    <!-- Connect -->
    <section class="connect">
        <div class="connect-text">
            <span>Hablemos</span>
            <h2>Conectar ahora</h2>
        </div>
        <a href="" class="btn">Contactanos</a>
    </section>

    <!-- Contact -->
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
            <i class='bx bxs-envelope'><span>Example@gmail.com</span></i>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="copyright">
        <p>© Derechos Reservados Por SPORTRNR.</p>
    </div>

    <!-- boxicons js-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="script.js"></script>
</body>
</html>