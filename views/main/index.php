<?php include_once 'views/template/header-main.php'; ?>
<!-- Start Ecorik Slider Area -->
<section class="eorik-slider-area">
    <div class="eorik-slider owl-carousel owl-theme">
        <?php foreach ($data['sliders'] as $slider) {  ?>
            <div class="eorik-slider-item" style="background-image: url(<?php echo Ruta_Main . 'assets/img/sliders/' . $slider['foto']; ?>);">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
                                <h1><?php echo $slider['titulo']; ?></h1>
                                <span><?php echo $slider['subtitulo']; ?></span>
                                <div class="slider-btn">
                                    <a class="default-btn" href="<?php echo $slider['url']; ?>">
                                        Más Información
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="white-shape">
        <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/home-one/slider/white-shape.png" alt="Image">
    </div>
    <div class="social-link">
        <ul>
            <li>
                <a href="https://www.youtube.com/user/LibertadorHotelsRS">
                    <i class="bx bxl-youtube"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/libertador_lima/">
                    <i class="bx bxl-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/juliovargasch/">
                    <i class="bx bxl-linkedin"></i>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- End Ecorik Slider Area -->

<!-- Start Check Area -->
<div class="check-area mb-minus-70">
    <div class="container">
        <form class="check-form" id="formulario" action="<?php echo Ruta_Main . 'Reservas/verify'; ?>">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="check-content">
                        <p>FECHA LLEGADA</p>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker-1">
                                <i class="flaticon-calendar"></i>
                                <input type="text" class="form-control" id="f_llegada" name="f_llegada" value="<?php echo date('Y-m-d'); ?>">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="check-content">
                        <p>FECHA SALIDA</p>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker-2">
                                <i class="flaticon-calendar"></i>
                                <input type="text" class="form-control" id="f_salida" name="f_salida" value="<?php echo date('Y-m-d'); ?>">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="check-content">
                        <div class="form-group">
                            <label for="habitacion" class="form-label">HABITACIONES</label>
                            <select name="habitacion" class="select-auto" id="habitacion" style="width: 100%">
                                <option selected>Seleccionar</option>
                                <?php foreach ($data['habitaciones'] as $habitacion) { ?>
                                    <option value="<?php echo $habitacion['id']; ?>"><?php echo $habitacion['estilo']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="check-btn check-content mb-0">
                        <button class="default-btn" type="submit">
                            Ver Reserva
                            <i class="flaticon-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Check Section -->

<!-- Start Explore Area -->
<section class="explore-area pt-170 pb-100">
    <div class="container">
        <div class="section-title">
            <span>Sobre nosotros</span>
            <h2>Libertador Hotels, Resorts & Spas</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="explore-img">
                    <img src="<?php echo Ruta_Main . 'assets/'; ?>/img/sliders/hotellibertador-sedepuno.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="explore-content ml-30">
                    <h2>Vive experiencias memorables</h2>
                    <p>Con más de 40 años de experiencia en el sector hotelero, buscamos brindar a cada huésped y colaborador una experiencia memorable..</p>

                    <p>Ofrecemos una colección de hoteles de lujo y servicio selecto en los principales destinos del Perú. Con el respaldo de acuerdos con Marriott International, operamos las marcas Westin, The Luxury Collection, AC Hotels y Aloft Hotels.</p>
                    <a href="about.html" class="default-btn">
                        Más Información
                        <i class="flaticon-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Explore Area -->

<!-- End Facilities Area -->
<section class="facilities-area pb-60">
    <div class="container">
        <div class="section-title">
            <span>Servicios</span>
            <h2>Ofrecemos variedad</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-pickup"></i>
                        <h3>Recoger y dejar​</h3>
                        <p>Servicio de transporte cómodo y confiable para su conveniencia.</p>
                        <a href="service-details.html" class="icon-btn">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-coffee-cup"></i>
                        <h3>Bebida de bienvenida</h3>
                        <p>Disfrute de nuestra bebida de bienvenida mientras se relaja.</p>
                        <a href="service-details.html" class="icon-btn">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-garage"></i>
                        <h3>Valet parking</h3>
                        <p>Estaciopnamiento seguro y conveniente para su vehiculo.</p>
                        <a href="service-details.html" class="icon-btn">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-water"></i>
                        <h3>Agua templada</h3>
                        <p>Refresque su sed con agua fria o caliente disponible en todo momento.</p>
                        <a href="service-details.html" class="icon-btn">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Facilities Area -->

<!-- End Incredible Area -->
<section class="incredible-area ptb-140 jarallax">
    <div class="container">
        <div class="incredible-content">
            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
                <i class="flaticon-play-button"></i>
            </a>
            <h2><span>Increible!</span> Vas a venir hoy</h2>
            <p>Descubre la elegancia y el confort en nuestro hotel, perfectamente ubicado con vistas panorámicas a la ciudad. Disfruta de nuestras lujosas habitaciones, relájate en nuestro spa de clase mundial y saborea la gastronomía en nuestros restaurantes exclusivos.</p>
            <a href="#" class="default-btn">
                Únete a nosotros hoy
                <i class="flaticon-right"></i>
            </a>
        </div>
    </div>
    <div class="white-shape">
        <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/shape/white-shape-top.png" alt="Image">
        <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/shape/white-shape-bottom.png" alt="Image">
    </div>
</section>
<!-- End Incredible Area -->

<!-- Start Our Rooms Area -->
<section class="our-rooms-area pt-60 pb-100">
    <div class="container">
        <div class="section-title">
            <span>Nuestras Habitaciones</span>
            <h2>Habitaciones y suites fascinantes</h2>
        </div>
        <div class="tab industries-list-tab">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="tabs">
                        <li class="single-rooms">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/rooms/habitaciondoblei.jpg" alt="Image">
                            <div class="room-content">
                                <h3>Doble habitacion</h3>
                                <span>Desde $75,9/noche</span>
                            </div>
                        </li>
                        <li class="single-rooms">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/rooms/habitacionreali.jpg" alt="Image">
                            <div class="room-content">
                                <h3>Habitación de lujo</h3>
                                <span>Desde $50,9/noche</span>
                            </div>
                        </li>
                        <li class="single-rooms">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/rooms/deluxei.jpg" alt="Image">
                            <div class="room-content">
                                <h3>Mejor habitacion</h3>
                                <span>Desde $70.9/noche</span>
                            </div>
                        </li>
                        <li class="single-rooms">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/rooms/triplei.jpg" alt="Image">
                            <div class="room-content">
                                <h3>Habitación Clásica</h3>
                                <span>Desde $95.9/noche</span>
                            </div>
                        </li>
                        <li class="single-rooms">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/rooms/budgeti.jpg" alt="Image">
                            <div class="room-content">
                                <h3>Habitación económica</h3>
                                <span>Desde $95.9/noche</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab_content">
                        <div class="tabs_item">
                            <div class="our-rooms-single-img room-bg-1">
                            </div>
                            <span class="preview-item">La vista previa de la habitación doble</span>
                        </div>
                        <div class="tabs_item">
                            <div class="our-rooms-single-img room-bg-2">
                            </div>
                            <span class="preview-item">La vista previa de la habitación de lujo</span>
                        </div>
                        <div class="tabs_item">
                            <div class="our-rooms-single-img room-bg-3">
                            </div>
                            <span class="preview-item">La vista previa de la mejor habitación</span>
                        </div>
                        <div class="tabs_item">
                            <div class="our-rooms-single-img room-bg-4">
                            </div>
                            <span class="preview-item">La vista previa de la habitación clásica</span>
                        </div>
                        <div class="tabs_item">
                            <div class="our-rooms-single-img room-bg-5">
                            </div>
                            <span class="preview-item">La vista previa de la habitación económica</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Rooms Area -->

<!-- Start City View Area -->
<section class="city-view-area ptb-100">
    <div class="container">
        <div class="city-wrap">
            <div class="single-city-item owl-carousel owl-theme">
                <div class="city-view-single-item">
                    <div class="city-content">
                        <span>La vista de la ciudad</span>
                        <h3>Una vista encantadora de la ciudad.</h3>
                        <p>Disfruta de una vista espectacular de la ciudad desde nuestro hotel. Nuestras habitaciones ofrecen panorámicas impresionantes que capturan la belleza y el dinamismo urbano.</p>

                        <p>Ya sea de día o de noche, te invitamos a contemplar una perspectiva única que hará tu estancia aún más memorable. ¡Reserva ahora y vive la experiencia de nuestra vista privilegiada!</p>
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <span>The City View</span>
                        <h3>The charming view of the city</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>

                        <p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End City View Area -->

<!-- Start Exclusive Area -->
<section class="exclusive-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Exclusivas Ofertas</span>
            <h2>Puedes obtener una oferta exclusiva </h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="exclusive-wrap">
                    <div class="row">
                        <div class="col-lg-6 pr-0">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/exclusive/nado.jpg" alt="Image">
                        </div>
                        <div class="col-lg-6 pl-0">
                            <div class="exclusive-content">
                                <span class="title">Hasta 30% de descuento</span>
                                <h3>Natación para hombre</h3>
                                <span class="review">
                                    4.5
                                    <a href="#">(432 Reseñas)</a>
                                </span>
                                <p>¡Sumérgete en una nueva experiencia y descubre el placer de nadar con nosotros!</p>
                                <ul>
                                    <li>
                                        <i class="bx bx-time"></i>
                                        Duración: 2 Horas
                                    </li>
                                    <li>
                                        <i class="bx bx-target-lock"></i>
                                        18+ años
                                    </li>
                                </ul>
                                <a href="book-table.html" class="default-btn">
                                    Reserva Online
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="exclusive-wrap">
                    <div class="row">
                        <div class="col-lg-6 pr-0">
                        <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/exclusive/desayuno.jpg" alt="Image">
                        </div>
                        <div class="col-lg-6 pl-0">
                            <div class="exclusive-content">
                                <span class="title">Sólo este mes</span>
                                <h3>Paquete de desayuno de $5</h3>
                                <span class="review">
                                    5.0
                                    <a href="#">(580 Reseñas)</a>
                                </span>
                                <p>Empieza tu día con energía en nuestro hotel y disfruta de nuestra oferta especial de desayuno.</p>
                                <ul>
                                    <li>
                                        <i class="bx bx-time"></i>
                                        Duración: 2 Horas
                                    </li>
                                    <li>
                                        <i class="bx bx-target-lock"></i>
                                        18+ años
                                    </li>
                                </ul>
                                <a href="book-table.html" class="default-btn">
                                    Reserva Online
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Exclusive Area -->

<!-- Start Booking Area -->
<section class="bokking-area pb-70">
    <div class="container">
        <div class="section-title">
            <span>Reserva</span>
            <h2>Beneficios de reserva directa</h2>
        </div>

        <div class="row">
            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="book-icon flaticon-online-booking"></i>
                        <span class="booking-title">Costo gratuito</span>
                        <h3>Sin gastos de reserva</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sin gastos de reserva</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>¡Disfruta de tu estancia con nosotros y olvídate de los costos adicionales! Ofrecemos una variedad de servicios gratuitos.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
                        <i class="book-icon flaticon-podium"></i>
                        <span class="booking-title">Costo gratuito</span>
                        <h3>Mejor tarifa garantizada</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-2">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mejor tarifa garantizada</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>¡Obtén nuestra mejor tarifa garantizada al reservar directamente con nosotros! En nuestro hotel, te aseguramos el precio más bajo disponible en todas nuestras habitaciones.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
                        <i class="book-icon flaticon-airport"></i>
                        <span class="booking-title">Costo gratuito</span>
                        <h3>Reservas 24/7</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-3">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Reservas 24/7</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Reserva tu estancia con nosotros de forma fácil y conveniente las 24 horas del día, los 7 días de la semana. Nuestro equipo está disponible en todo momento para ayudarte con tus reservas y responder cualquier pregunta que puedas tener.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
                        <i class="book-icon flaticon-slow"></i>
                        <span class="booking-title">Costo gratuito</span>
                        <h3>Wifi de alta velocidad</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-4">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Wifi de alta velocidad</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Disfruta de conectividad sin límites con nuestro WiFi de alta velocidad en todo el hotel. Ya sea que estés aquí por negocios o placer, mantente conectado sin interrupciones y navega, transmite y trabaja con total comodidad.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
                        <i class="book-icon flaticon-coffee-cup-1"></i>
                        <span class="booking-title">Costo gratuito</span>
                        <h3>Desayuno gratis</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-5">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Desayuno gratis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>¡Comienza cada día con energía! Disfruta de nuestro delicioso desayuno gratis durante tu estancia en nuestro hotel. Con una variedad de opciones frescas y sabrosas, estamos aquí para asegurarnos de que empieces bien el día.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Booking Area -->

<!-- Start Restaurants Area -->
<section class="restaurants-area pb-100">
    <div class="container-fluid p-0">
        <div class="section-title">
            <span>Restaurantes</span>
            <h2>El área que cubrimos</h2>
        </div>

        <div class="restaurants-wrap owl-carousel owl-theme">
            <div class="single-restaurants bg-1">
                <i class="restaurants-icon flaticon-coffee-cup"></i>
                <span>Restaurantes</span>
                <p>Descubre una experiencia gastronómica excepcional en nuestros restaurantes dentro del hotel.</p>
                <a href="#" class="default-btn">
                    Explora más
                    <i class="flaticon-right"></i>
                </a>
            </div>
            <div class="single-restaurants bg-2">
                <i class="restaurants-icon flaticon-swimming"></i>
                <span>Piscina</span>
                <p>Relájate en nuestras cómodas tumbonas junto a la piscina.</p>
                <a href="#" class="default-btn">
                    Explora más
                    <i class="flaticon-right"></i>
                </a>
            </div>
            <div class="single-restaurants bg-3">
                <i class="restaurants-icon flaticon-speaker"></i>
                <span>Sala de conferencias</span>
                <p>Organiza eventos excepcionales en nuestra moderna sala de conferencias.</p>
                <a href="#" class="default-btn">
                    Explora más
                    <i class="flaticon-right"></i>
                </a>
            </div>
            <div class="single-restaurants bg-4">
                <i class="restaurants-icon flaticon-podium"></i>
                <span>Mejor tarifa</span>
                <p>¡Aprovecha nuestra mejor tarifa disponible garantizada al reservar directamente con nosotros!</p>
                <a href="#" class="default-btn">
                    Explora más
                    <i class="flaticon-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Restaurants Area -->

<!-- start Testimonials Area -->
<section class="testimonials-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>Testimonios</span>
            <h2>Comentarios de clientes</h2>
        </div>
        <div class="testimonials-wrap owl-carousel owl-theme">
            <div class="single-testimonials">
                <ul>
                    <li>
                        
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Excelente habitación</h3>
                <p>“Buen servicio, se los recomiendo”</p>
                <div class="testimonials-content">
                    <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/testimonials/usuario.jpg" alt="Image">
                    <h4>Hace 1 semana</h4>
                    <span>RSmith@gmail.com</span>
                </div>
            </div>
            <div class="single-testimonials">
                <ul>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Excelente hotel</h3>
                <p>“Tiene buenas instalaciones”</p>
                <div class="testimonials-content">
                    <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/testimonials/usuario.jpg" alt="Image">
                    <h4>Hace 1 mes</h4>
                    <span>aym__@gmail.com</span>
                </div>
            </div>
            <div class="single-testimonials">
                <ul>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Buenos empleados</h3>
                <p>“Los empleados fueron muy amables”</p>
                <div class="testimonials-content">
                    <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/testimonials/usuario.jpg" alt="Image">
                    <h4>Hace 2 semanas</h4>
                    <span>Juli11@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Area -->

<!-- End News Area -->
<section class="news-area pb-60">
    <div class="container">
        <div class="section-title">
            <span>Nuestro Blog</span>
            <h2>Actualizaciones de noticias y artículos </h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-img">
                        <a href="news-details.html">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/news/celebracion1.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="news-content-wrap">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="flaticon-user"></i>
                                    Cliente
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-conversation"></i>
                                    Comentario
                                </a>
                            </li>
                        </ul>
                        <a href="news-details.html">
                            <h3>Celebrando la década de hotel en 2020</h3>
                        </a>
                        <p>La atmósfera estaba llena de alegría y nostalgia mientras recordábamos los logros del hotel durante
                            estos diez años</p>
                        <a class="read-more" href="news-details.html">
                            Lee más
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-img">
                        <a href="news-details.html">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/news/empresario.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="news-content-wrap">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="flaticon-user"></i>
                                    Cliente
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-conversation"></i>
                                    Comentario
                                </a>
                            </li>
                        </ul>
                        <a href="news-details.html">
                            <h3>Un día perfecto con un empresario en el hotel</h3>
                        </a>
                        <p>Fue una experiencia enriquecedora. La charla fue inspiradora y llena de valiosos
                            consejos. Además, el entorno del hotel proporcionó el ambiente ideal para networking
                            y conversaciones significativas. Sin duda, un día productivo y memorable.</p>
                        <a class="read-more" href="news-details.html">
                            Lee más
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-news">
                    <div class="news-img">
                        <a href="news-details.html">
                            <img src="<?php echo Ruta_Main . 'assets/main'; ?>/img/news/celebracion2.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="news-content-wrap">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="flaticon-user"></i>
                                    Cliente
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-conversation"></i>
                                    Comentario
                                </a>
                            </li>
                        </ul>
                        <a href="news-details.html">
                            <h3>Celebrando la década de hotel en 2019</h3>
                        </a>
                        <p>La decoración era elegante, la comida exquisita y la compañía inmejorable. Fue una noche que
                            reflejó perfectamente el espíritu y la historia del hotel.</p>
                        <a class="read-more" href="news-details.html">
                            Lee más
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Area -->
<?php include_once 'views/template/footer-main.php';
if (!empty($_GET['respuesta']) && $_GET['respuesta'] == 'warning') { ?>
    <script>
        AlertSweet('Todos los campos son requeridos.', 'warning');
    </script>
<?php } ?>

<script src="<?php echo Ruta_Main . 'assets/main/js/pages/disponibilidad.js' ?>"> </script>
<script src="<?php echo Ruta_Main . 'assets/main/js/pages/index.js' ?>"> </script>
</body>

</html>