<?php
    session_start();
    $message = "";
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">

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
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
            <?php if(isset($_SESSION['cuenta'])){ echo '<li><a href="#suscrip">Suscripciones</a></li>'; echo '<li style = "color:#FFE060;">'.$_SESSION['cuenta'].'</li> '; echo '<li><a href="#shop"><img src="Img/cart.svg" alt="cart" class="cart"></a></li>'; echo '<li><a href="php/logout.php">Logout</a></li>';}else{echo '<li><a href="#modal" class="login">Iniciar sesión</a></li>';}?>
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
            <a href="#menu" class="btn">Ver Cursos</a>
        </div>

        <div class="home-img">
            <img src="Img/AdidasX.png" alt="">
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
            <h2>Lista de productos</h2>
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
                    <img src="Img/AdidasX1.jpg" alt="">
                </div>
                <h2></h2>
                <h3></h3>
                <span>$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/AdidasX1.jpg" alt="">
                </div>
                <h2></h2>
                <h3></h3>
                <span></span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/AdidasX.png" alt="">
                </div>
                <h2></h2>
                <h3></h3>
                <span></span>
                <i class='bx bx-cart-alt'></i>
            </div>
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

    <!-- Connect -->
    <section class="connect">
        <div class="connect-text">
            <span>Hablemos</span>
            <h2>Conectar ahora</h2>
        </div>
        <a href="#contacto" class="btn">Contactanos</a>
    </section>

    <!-- Contact -->
    <footer class="contact">
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
    
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="js/script.js"></script>
    <script src="js/formularioRegistro.js"></script>
    <script src="https://kit.fontawesome.com/850ac5ea56.js" crossorigin="anonymous"></script>
</body>
</html>