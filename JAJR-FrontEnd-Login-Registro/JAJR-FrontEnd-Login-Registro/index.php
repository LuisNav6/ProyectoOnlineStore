<?php
    session_start();
    if(isset($_SESSION['cuenta'])){
        echo "<script> alert('Estas logeado en ".$_SESSION['cuenta']."')</script>";
    }else{
        echo "<script> alert('No estas logeado') </script>";
    }
    $message = "";
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">
    
    <!-- Jquery AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <header id="#header" class="hero">
        <nav class="nav container">
            <div class="nav_logo">
                <h2 class="nav_title">Sports</h2>
            </div>
            <ul class="nav_link nav_link--menu">
                <li class="nav_items">
                    <a href="#modal" class="nav_links">Inicio</a>
                </li>
                <li class="nav_items">
                    <a href="#" class="nav_links">Acerca de</a>
                </li>
                <li class="nav_items">
                    <a href="#" class="nav_links">Contacto</a>
                </li>
                <img src="images/exit.svg" class="nav_close" alt="logo_exit">
            </ul>
            <div class="nav_menu">
                <img src="images/menu.svg" class="nav_img" alt="menu">
            </div>
        </nav>

        <section class="hero_container container">
            <h1 class="hero_title">Ropa única para personas únicas.</h1>
            <p class="hero_paragraph">Elige tu ropa preferida, encuentra la mejor calidad y comodidad en nuestra pagina</p>
            <a href="#" class="cta">Ver productos</a>
        </section>
    </header>
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
                
                    <label for="captcha" class="text-info">
                    <?php if($message) { ?>
                        <span class="text-warning"><strong><?php echo $message; ?></strong></span>
                        <?php } ?>	
                    </label>
                    <div class="login_form__label-container">
                        <label for="usuario" class="login_form__label">Introduzca el captcha solicitado</label>
                    </div>
                    <input type="text" name="securityCode" id="securityCode" class="login-form__input" placeholder="">
                    <div class="captchaS">
                        <div class="captcha">
                            <img style="border: 1px solid #D3D0D0" src="php/get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'>
                            <a href="javascript:void(0)" id="reloadCaptcha"><img style="width: 30px;" src="images/refresh.svg" ></a>
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
    <script src="js/formularioRegistro.js"></script>
    <script src="https://kit.fontawesome.com/850ac5ea56.js" crossorigin="anonymous"></script>
</body>
</html>