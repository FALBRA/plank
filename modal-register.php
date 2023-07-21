<section id="modal-register" class="modal-register">
    <div class="modal-register-content">
        <span class="close-register">&times;</span>
        <div class="logo-register-content"><img src="img/logo.png" alt=""></div>
        <h2 class="h2-bajo-logo">Inicia con tu cuenta de Google</h2>
        <div class="boton-continuar-google">
            <button type="">Continua con Google<i class="fa-brands fa-google"></i></button>
        </div>
        <hr class="linea_separacion-modal">
        <h2 class="h2-inicio-form">Regístrate con una nueva cuenta</h2>
        <div class="form-modal-register-conteiner">
            <form class="form-modal-register" method="POST" action="php/registro-clientes.php">
                <label for="nombre-completo">Nombre completo:</label>
                <input type="text" id="nombre-completo" placeholder="Nombres y apellidos completos" name="nombre-completo" required>
                <label for="celular">Nùmero de celular:</label>
                <input type="number" id="celular" placeholder="000 000 000" name="celular" required>
                <label for="correo">Email:</label>
                <input type="email" id="correo" placeholder="ejemplo@host.com" name="correo" required>
                <label for="nickname">Nombre de Usuario:</label>
                <input type="text" id="nickname" placeholder="Nickname" name="nickname" required>
                <label for="pass">Contraseña:</label>
                <input type="password" id="pass" placeholder="Contraseña123" name="pass" required>
                <div class="boton-registrate"><button id="registrate" type="submit">Regístrate</button></div>
            </form>
        </div>
        <div class="inicia-sesion">
            <h2>¿Ya tienes una cuenta?</h2>
            <a id="returnLogin" href="#" class="a-inicia-sesion">Inicia sesión</a>
        </div>
    </div>
</section>


<section id="confirm-cuenta" class="confirm-cuenta">
    <div class="modal-confirm-cuenta-content">
        <span class="close-confirm-cuenta">&times;</span>
        <div class="logo-confirm-cuenta"><img src="img/logo.png" alt=""></div>
        <h2 class="h2-bajo-logo-confirm-cuenta">Confirma tu cuenta</h2>
        <p class="p-bajo-h2">Se ha enviado un código a tu correo (e******@g****). Introdúcelo a continuación para confirmar tu cuenta</p>
        <div class="form-modal-confirm-cuenta-container">
            <form class="form-modal-confirm-cuenta" action="">
                <div class="row_codigo-verificacion">
                    <label for="codigo">Código de verificación:</label>
                    <input type="text" id="codigo" required>
                </div>
                <button type="submit">Confirmar cuenta </button>
            </form>
        </div>
        <div class="otro-codigo">
            <h2>Si no recibiste el código</h2>
            <a id="otro-cod" href="#" class="a-otro-codigo"> has clic aqui</a>
        </div>
    </div>
</section>

<script src="js/modal-register.js"></script>