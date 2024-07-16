<?php include_once 'views/template/header-cliente.php'; ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Confirmar Reserva</h4>
        <?php if (!empty($_SESSION['reserva'])) { ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>¡Cuidado!</strong> Tienes una reserva pendiente
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo Ruta_Main . 'assets/img/Habitaciones/' . $data['habitacion']['foto']; ?>" width="100%" class="img-fluid rounded-top" alt="" />
                    <!-- Hover added -->
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong> Habitación: </strong>
                            <?php echo $data['habitacion']['estilo']; ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong> Fecha Llegada: </strong>
                            <?php echo fechaPerzo($_SESSION['reserva']['f_llegada']); ?>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                            <strong> Fecha salida: </strong>
                            <?php echo fechaPerzo($_SESSION['reserva']['f_salida']); ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong> Precio/Noche: </strong>
                            <?php echo $data['habitacion']['precio']; ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong> Capacidad: </strong>
                            <?php echo $data['habitacion']['capacidad']; ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong> N° Habitacion: </strong>
                            <?php echo $data['habitacion']['numero']; ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong> Descripción: </strong>
                            <?php echo $data['habitacion']['descripción']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pagar con Paypal
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div id="paypal-button-container"></div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Pagar en Mercado Pago
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div id="wallet_container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <?php } else { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <strong>¡Cuidado!</strong> No hay reservas pendientes
            </div>
        <?php } ?>
    </div>
    <?php include_once 'views/template/footer-cliente.php'; ?>
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>


    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 40
            },

            // Call your server to set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    application_context: {
                        shipping_preference: 'NO_SHIPPING',
                    },
                    purchase_units: [{
                        amount: {
                            currency_code: '<?php echo MONEDA_PP; ?>',
                            value: '<?php echo $data['total']; ?>',
                        }
                    }]
                })
            },

            // Call your server to finalize the transaction
            onApprove: function(data, actions) {
                console.log(data);
                return actions.order.capture().then(function(orderData) {
                    return fetch(base_url + 'Reservas/registrarReserva', {
                        method: 'post',
                        headers:{
                            "Content-Type":"application/json"
                        },
                        body: JSON.stringify({
                            reserva:orderData
                        })
                    }).then(function(res) {
                        return res.json();
                    }).then(function(orderData) {
                    });
                })

            }

        }).render('#paypal-button-container');

        //MERCADO PAGO
        const mp = new MercadoPago('<?php echo PUBLIC_KEY ?>');
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "<?php echo $data['preference_id']; ?>",
            },
            customization: {
                texts: {
                    valueProp: 'smart_option',
                },
            }
        });
    </script>


    </body>

    </html>