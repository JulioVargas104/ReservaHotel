<?php include_once 'views/template/header-main.php';
include_once 'views/template/portada.php'; ?>

<!-- Start Log In Area -->
<section class="user-area-all-style log-in-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Inicia Sesión</h3>
                    </div>
                    <form id="formulario" autocomplete="off">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="dni" placeholder="Dni o Correo Electrónico">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="clave" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <a class="forget" href="#">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Ingresar
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    ¿No tienes cuenta?
                                    <a href="<?php echo Ruta_Main.'registro'; ?>">Registrarse</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Log In Area -->

<?php include_once 'views/template/footer-main.php'; ?>
<script src="<?php echo Ruta_Main . 'assets/main/js/pages/login.js' ?>"> </script>

</body>

</html>