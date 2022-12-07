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
            <li><a href="#modal" class="login">Iniciar sesión</a></li>
            <!-- Dark Mode -->
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
        <!--Modal login-->
        <section id="modal" class="modal">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion" method="POST" action="php/login.php">
                    <div class="login-form__logo-container">
                        <img src="images/sportlogu.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        <div class="login-form__header">Inicio de Sesion</div>
                        <div class="login_form__label-container">
                             <label for="usuario" class="login_form__label">Usuario</label>
                        </div>
                        <!-- login and cookies -->
                        <form action="page1.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
                        <input class="login-form__input" type="text" name="fm_username" placeholder="Nombre de usuario" value="<?php if(isset($_COOKIE["usuario"])) { echo $_COOKIE["usuario"]; }?>">
                        <div class="login_form__label-container">
                            <label for="usuario" class="login_form__label">Contraseña</label>
                        </div>
        
                        <input class="login-form__input" type="password" name="fm_password" placeholder="Contraseña" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>">
                           
                        <!-- Captcha -->
                        <script src="js/load_captcha.js"></script>		
                    
                        <div class="login_form__label-container">
                            <label for="usuario" class="login_form__label">Introduzca el captcha solicitado</label>
                        </div>
                        <input type="text" name="securityCode" id="securityCode" class="login-form__input" placeholder="">
                        <div class="captchaS">
                            <div class="captcha">
                                <img style="border: 1px solid #D3D0D0" src="php/get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'>
                                <a href="javascript:void(0)" id="reloadCaptcha"><img style="width: 30px;" src="Img/refresh.svg" ></a>
                            </div>
                        </div>
                        
                        <div class="login-form__checkbox-container">
                            <input class="login-form__checkbox" type="checkbox" name="fm_remember"<?php if(isset($_COOKIE["usuario"])){ echo "checked "; } ?> > Recordarme 
                        </div>
    
                        <div class="login-form__button-container">
                            <button class="login-form__button" type="submit" name = "submit">Iniciar Sesion</button>
                        </div>
                        <div class="login-form__links">
                            <a href="#modal2" class="login-form__link">¿No tienes cuenta?</a>
                            <a href="#" class="login-form__link">¿Olvidaste tu Contraseña?</a>
                            <a href="#header" class="login-form__link">Cerrar</a>
                        </div>
                    </div>
                </form>
            </div>
          </section>
          <section id="modal2" class="modal2">
            <div class="modal2_container">
                <div class="login-form__logo-container">
                    <img src="images/sportlogu.png" alt="Logo" class="login-form__logo">
                </div>
                
                <form class="formulario login-form__content" id="formulario">
                    <div class="login-form__header-formulario">   
                        <div class="login-form__header">Registro</div>
                    </div>
                    <!-- Grupo: Usuario -->
                    <div class="formulario__grupo" id="grupo__usuario">
                        <label for="usuario" class="formulario__label">Usuario</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Marco323">
                            <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                        </div>
                        <p class="formulario__input-error"> El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                    </div>
    
                    <!-- Grupo: Nombre -->
                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Marcho Martinez">
                            <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                        </div>
                        <p class="formulario__input-error"> El Nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                    </div>
    
                    <!-- Grupo: Contraseña -->
                    <div class="formulario__grupo" id="grupo__password">
                        <label for="password" class="formulario__label">Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password" id="password">
                            <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                        </div>
                        <p class="formulario__input-error"> La contraseña tiene que ser de 4 a 12 digitos.</p>
                    </div>
    
                    <!-- Grupo: Contraseña 2 -->
                    <div class="formulario__grupo" id="grupo__password2">
                        <label for="password2" class="formulario__label">Confirmar Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password2" id="password2">
                            <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                        </div>
                        <p class="formulario__input-error"> Ambas contraseñas tienen que ser iguales.</p>
                    </div>
    
                    <!-- Grupo: Email -->
                    <div class="formulario__grupo" id="grupo__correo">
                        <label for="correo" class="formulario__label">Email</label>
                        <div class="formulario__grupo-input formulario__grupo-input-email">
                            <input type="email" class="formulario__input" name="correo" id="correo" placeholder="email@email.com">
                            <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                        </div>
                        <p class="formulario__input-error"> El correo tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                    </div>
    
                     <!-- Grupo: Telefono -->
                     <div class="formulario__grupo" id="grupo__telefono">
                        <label for="telefono" class="formulario__label">Telefono</label>
                        <div class="formulario__grupo-input formulario__grupo-input-email">
                            <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="449023432">
                            <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                        </div>
                        <p class="formulario__input-error"> El telefono solo puede contener numeros y el maximo son 14 digitos.</p>
                    </div>
    
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error:</b> Por favor llene todos los campos </p>
                    </div>
                    <div id="respuesta"></div>
    
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn"> Registrarse </button>
                        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"> Formulario enviado exitosamente</p>
                        <div class="login-form__links">
                            <a href="#modal" class="login-form__link">Regresar</a>
                        </div>
                    </div>
    
                </form>
        </section>
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
                    <img src="Img/c++.jpg" alt="">
                </div>
                <h2></h2>
                <h3></h3>
                <span>$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/php.jpg" alt="">
                </div>
                <h2></h2>
                <h3></h3>
                <span></span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <div class="box-img">
                    <img src="Img/javascript.jpg" alt="">
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



    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="js/script.js"></script>
    <script src="js/formularioRegistro.js"></script>
    <script src="https://kit.fontawesome.com/850ac5ea56.js" crossorigin="anonymous"></script>
</body>
</html>