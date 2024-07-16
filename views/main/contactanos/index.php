<?php include_once 'views/template/header-main.php';
include_once 'views/template/portada.php'; ?>

<!-- Start Contact Area -->
<section class="main-contact-area contact-info-area contact-info-three pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Contacto</span>
            <h2>Déjanos un mensaje para cualquier consulta</h2>
            <p>Ingresa los datos solicitados para una atención personalizada, además, dejamos nuestro contacto</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-wrap contact-pages">
                    <div class="contact-form contact-form-mb">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Nombres">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Correo Electrónico">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Celular">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Asunto">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="4" required data-error="Write your message" placeholder="Mensaje"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-two">
                                        Enviar
                                        <i class="flaticon-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-envelope"></i>
                            <h3>Nuestro Email:</h3>
                            <a href="mailto:info@libertador.com.pe">info@libertador.com.pe</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-phone-call"></i>
                            <h3>Llamenos:</h3>
                            <a href="tel:+51(1)518-6300">Tel. +51(1)518-6300</a>
                            <a href="tel:+51(1)201-5000">Tel. +51(1)201-5000</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-location-plus"></i>
                            <h3>Perú</h3>
                            <a href="#">Av. 28 de Julio N 894, Miraflores</a>
                            <a href="#">Malecón de la Reserva 729, Miraflores</a>
                            <a href="#">Las Begonias 450, San Isidro</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-phone-call"></i>
                            <h3>Llamenos:</h3>
                            <a href="tel:+51(1)526-4850">Tel. +51(1)526-4850</a>
                            <a href="tel:+51(56)581-333">Tel. +51(56)581-333</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1608494047082!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Map Area -->
<?php include_once 'views/template/footer-main.php'; ?>
</body>

</html>