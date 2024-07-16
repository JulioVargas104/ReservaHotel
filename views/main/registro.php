<?php include_once 'views/template/header-main.php';
include_once 'views/template/portada.php'; ?>

<!-- Start Sign Up Area -->
<section class="user-area-all-style sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Crea una cuenta</h3>
                    </div>
                    <form id="formulario" autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="nombre" placeholder="Nombres" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="apellido" placeholder="Apellidos" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="dni" placeholder="Ingresa tu DNI" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="correo" placeholder="Correo electrónico" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="clave" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="confirmar" placeholder="Confirmar Password" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb2" name="chb2" required>
                                    <label for="chb2">
                                        Estoy de acuerdo con
                                        <a href="#">Términos y condiciones</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Registrarse
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    ¿Ya tienes una cuenta?
                                    <a href="<?php echo Ruta_Main . 'login'; ?>"> Iniciar sesión</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sign Up Area -->


<?php include_once 'views/template/footer-main.php'; ?>
<script src="<?php echo Ruta_Main . 'assets/main/js/pages/registro.js' ?>"> </script>

</body>

</html>