<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="UTF-8">
        <!-- CSS -->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/login.css">
</head>
    <body>
        <div>
            <form class="login-form" id="formInicioSesion" method="POST" action="mail.php">
                <div class="login-form__logo-container">
                    <img src="../images/sportlogu.png" alt="Logo" class="login-form__logo">
                </div>
                <div class="login-form__content">
                        <div class="login-form__header">Recuperar Contraseña</div>
                        <div class="login_form__label-container">
                            <label for="correo" class="login_form__label">Email</label>
                        </div>
                        <input class="login-form__input" type="email" name="correo" placeholder="correo@gmail.com">
                    <div class="login-form__button-container">
                        <button class="login-form__button" type="submit" name = "submit">Enviar correo</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>