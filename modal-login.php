<section id="modal-login" class="modal-login">
    <div class="modal-login-content">
        <span class="close">&times;</span>
        <div class="logo-modal"><img src="img/logo.png" alt=""></div>
        <h2 class="h2-bajo-logo">Inicia con tu cuenta de Google</h2>
        <div class="boton-continuar-google">
            <button type="">Continua con Google<i class="fa-brands fa-google"></i></button>
        </div>
        <hr class="linea_separacion-modal">
        <h2 class="h2-inicio-form">Inicia sesión con tu email y contraseña</h2>
        <div class="form-modal-login-conteiner">
            <form class="form-modal-login" action="php/inicio-sesion.php" method="POST">
                <label for="correo">Email</label>
                <input type="email" id="correo" name="email" placeholder="ejemplo@host.com" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="contraseña" required>
                <a href="" class="forgot">¿Olvidaste tu contraseña?</a>
                <div class="boton-inicio-sesion"><button name="login" type="submit">Iniciar sesión</button></div>
            </form> 
        </div>
        <div class="registrate">
            <h2>¿Necesitas una cuenta?</h2>
            <a id="register" href="#" class="a-registrate">regístrate</a>
        </div>
    </div>
</section>
<script src="js/modal-login.js"></script>

<?php
    include("modal-register.php");
?>