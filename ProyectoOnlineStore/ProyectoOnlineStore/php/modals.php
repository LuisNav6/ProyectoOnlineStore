<!--Modal login-->
    <section id="modal" class="modal">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion" method="POST" action="php/login.php">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
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
                            </div>
                            <div class="captcha">
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

          <!-- Modal Registro !-->
          <section id="modal2" class="modal2">
            <div class="modal2_container">
                <div class="login-form__logo-container">
                    <img src="Img/logo.png" alt="Logo" class="login-form__logo">
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
        <!-- Modal Bloqueo !-->
        <section class="modal" id="bloq">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        <div class="login-form__header">Usuario Bloqueado: <label style= "color:#EC250B"for="bloq"> <?php echo $_SESSION['nameAccount'] ?> </label> </div>
                        <div class="login-form__button-container">
                            <a href="#recovery" class="btnN"> Recuperar Contraseña</a> 
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Modal Bloqueo attempts !-->
        <section class="modal" id="bloqattempts">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        <div class="login-form__header">Datos erroneos intentos restantes : <label style= "color:#EC250B"for="bloq"> <?php echo $_SESSION['attempts'] ?> </label> </div>
                        <div class="login-form__button-container">
                            <a href="#modal" class="btnN"> Volver </a> 
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Modal Recuperar Contraseña/email !-->
        <section class="modal" id="recovery">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion" method="POST" action="php/mail.php">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
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
        </section>
        <!-- Modal Colocar Contraseña Temp !-->
        <section class="modal" id="temp">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion" action ="php/tempPass.php" method = "POST">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        <div class="login-form__header" style ="color:#03bb85">Correo enviado</div>
                        <div class="login_form__label-container">
                            <label for="usuario" class="login_form__label">Colocar contraseña temporal</label>
                        </div>
                        <input class="login-form__input" type="password" name="tempass">
                        <div class="login-form__button-container">
                            <button class="login-form__button" type="submit">Enviar</button>
                        </div>      
                    </div>
                </form>
            </div>
        </section>
        <!-- Modal Colocar Nueva contraseña !-->
        <section class="modal" id="updatePassword">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion" method="POST" action="php/updateAccount.php">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                            <div class="login-form__header">Recuperar Contraseña</div>
                            <div class="login_form__label-container">
                                <label for="usuario" class="login_form__label">Nueva Contraseña</label>
                            </div>
                            <input class="login-form__input" type="password" name="newpass">
                            <div class="login_form__label-container">
                                <label for="usuario" class="login_form__label">Confirmar Nueva Contraseña</label>
                            </div>
                            <input class="login-form__input" type="password" name="newpass2">
                        <div class="login-form__button-container">
                            <button class="login-form__button" type="submit" name ="submit" >Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Modal Confirmar todo good !-->
        <section class="modal" id="good">
            <div class="modal_container">
                <div class="login-form">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        
                        <div class="login-form__header">Contraseña actualizada</div>
                        <div class="login-form__button-container">
                                <a href="#home" class="btnN"> Cerrar</a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal Suscripcion !-->
        <section class="modal" id="suscrip">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion" method="POST" action="php/mailSus.php">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                            <div class="login-form__header">Suscribirse</div>
                            <div class="login_form__label-container">
                                <label for="correo" class="login_form__label">Email</label>
                            </div>
                            <input class="login-form__input" type="email" name="correo" placeholder="correo@gmail.com">
                        <div class="login-form__button-container">
                            <button class="login-form__button" type="submit" name = "submit">Suscribirse</button>
                            <a href="#home" class="btnN"> Cerrar</a> 
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Modal Confirmar todo good mailSuscripcion!-->
        <section class="modal" id="goodmail">
            <div class="modal_container">
                <div class="login-form">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        
                        <div class="login-form__header" style = "color: #35FA5D">Mail Enviado</div>
                        <div class="login-form__button-container">
                                <a href="#home" class="btnN"> Cerrar</a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal error Captcha !-->
        <section class="modal" id="errorCapt">
            <div class="modal_container">
                <div class="login-form">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        
                        <div class="login-form__header" style ="color:#CF271B"> Capture bien el captcha</div>
                        <div class="login-form__button-container">
                                <a href="#home" class="btnN"> Cerrar</a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal error Usuario y/o contraseña !-->
        <section class="modal" id="errorUsr">
            <div class="modal_container">
                <div class="login-form">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                        
                        <div class="login-form__header" style ="color:#CF271B"> Usuario y/o contraseña incorrectos</div>
                        <div class="login-form__button-container">
                                <a href="#home" class="btnN"> Cerrar</a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal contacto !-->
        <section class="modal" id="contacto">
            <div class="modal_container">
                <form class="login-form" id="formInicioSesion" method="POST" action="php/contacto.php">
                    <div class="login-form__logo-container">
                        <img src="Img/logo.png" alt="Logo" class="login-form__logo">
                    </div>
                    <div class="login-form__content">
                            <div class="login-form__header">Contacto</div>
                            <div class="login_form__label-container">
                                <label for="usuario" class="login_form__label">Usuario</label>
                            </div>
                            <input class="login-form__input" type="text" name="fm_username" placeholder="Nombre de usuario">
                            <div class="login_form__label-container">
                                <label for="correo" class="login_form__label">Email</label>
                            </div>
                            <input class="login-form__input" type="email" name="correo" placeholder="correo@gmail.com">
                            <div class="login_form__label-container">
                                <label for="usuario" class="login_form__label">Mensaje</label>
                            </div>
                            <textarea class="login-form__input" name="textarea" id="" cols="30" rows="10" style="width:300px heigth:100px"></textarea>
                        <div class="contBotones">
                            <div class="login-form__button-container">
                                <button class="login-form__button" type="submit" name = "submit">Enviar correo</button>
                            </div>
                            <div class="login-form__button-container">
                                    <a href="#home" class="btnN"> Cerrar</a> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Modal checkout !-->
        <section class="modal" id="checkout">
            <div class="modal_container">
             	<div class='container'>
                  <div class='window'>
                      <div class='order-info'>
                          <div class='order-info-content'>
                              <h2>Order Summary</h2>
                              <div class='line'></div>
                              <table class='order-table'>
                                  <tbody>
                                      <tr>
                                          <td><img src='https://dl.dropboxusercontent.com/s/sim84r2xfedj99n/%24_32.JPG'
                                                  class='full-width'></img>
                                          </td>
                                          <td>
                                              <br> <span class='thin'>Nike</span>
                                              <br> Free Run 3.0 Women<br> <span class='thin small'> Color: Grey/Orange, Size:
                                                  10.5<br><br></span>
                                          </td>

                                      </tr>
                                      <tr>
                                          <td>
                                              <div class='price'>$99.95</div>
                                          </td>
                                      </tr>
                                  </tbody>

                              </table>
                              <div class='line'></div>
                              <table class='order-table'>
                                  <tbody>
                                      <tr>
                                          <td><img src='https://dl.dropboxusercontent.com/s/qbj9tsbvthqq72c/Vintage-20L-Backpack-by-Fj%C3%A4llr%C3%A4ven.jpg'
                                                  class='full-width'></img>
                                          </td>
                                          <td>
                                              <br> <span class='thin'>Fjällräven</span>
                                              <br>Vintage Backpack<br> <span class='thin small'> Color: Olive, Size: 20L</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class='price'>$235.95</div>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                              <div class='line'></div>
                              <table class='order-table'>
                                  <tbody>
                                      <tr>
                                          <td><img src='https://dl.dropboxusercontent.com/s/nbr4koso8dpoggs/6136C1p5FjL._SL1500_.jpg'
                                                  class='full-width'></img>
                                          </td>
                                          <td>
                                              <br> <span class='thin'>Monobento</span>
                                              <br>Double Lunchbox<br> <span class='thin small'> Color: Pink, Size: Medium</span>
                                          </td>

                                      </tr>
                                      <tr>
                                          <td>
                                              <div class='price'>$25.95</div>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                              <div class='line'></div>
                              <div class='total'>
                                  <span style='float:left;'>
                                      <div class='thin dense'>VAT 19%</div>
                                      <div class='thin dense'>Delivery</div>
                                      TOTAL
                                  </span>
                                  <span style='float:right; text-align:right;'>
                                      <div class='thin dense'>$68.75</div>
                                      <div class='thin dense'>$4.95</div>
                                      $435.55
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class='credit-info'>
                          <div class='credit-info-content'>
                              <table class='half-input-table'>
                                  <tr>
                                      <td>Please select your card: </td>
                                      <td>
                                          <div class='dropdown' id='card-dropdown'>
                                              <div class='dropdown-btn' id='current-card'>Visa</div>
                                              <div class='dropdown-select'>
                                                  <ul>
                                                      <li>Master Card</li>
                                                      <li>American Express</li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              </table>
                              <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80'
                                  class='credit-card-image' id='credit-card-image'></img>
                              Card Number
                              <input class='input-field'></input>
                              Card Holder
                              <input class='input-field'></input>
                              <table class='half-input-table'>
                                  <tr>
                                      <td> Expires
                                          <input class='input-field'></input>
                                      </td>
                                      <td>CVC
                                          <input class='input-field'></input>
                                      </td>
                                  </tr>
                              </table>
								
							  <button class='pay-btn'><a href="#home"> Cerrar</a></button>
								
                          </div>
                      </div>
                  </div>
              </div>
          	</div>
         </section>
	