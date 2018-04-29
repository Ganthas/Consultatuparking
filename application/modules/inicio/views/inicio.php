<body id='page-top' class='index'>

    <!-- Header -->
    <header style='background-color:#c4cad0'>
        <div class='container'>
            <div class='intro-text'>
                <div class='row'>
                    <div class='col-lg-12 text-center'>
                        <h2 class='section-heading'>No sabes cuanto <img src='img/pay.svg' width='100px'> ?</h2>
                        <h3 class='section-subheading' style='color:#fff;padding:10px 0px'><b style='text-decoration:underline'>Consulta tu Parking</b>!, solo <b style='color:#00afb5'>ingresa</b> tu <b style='color:#00afb5'>hora</b> de <b style='color:#00afb5'>llegada</b></h3>
                    </div>
                </div>
								<h3 class='section-subheading' style='color:#fff;padding:10px 0px'>Donde estás?</h3>
								<div class='center'>
										<a href='<?php echo base_url('mall/mallplazaeltrebol')?>' class='place mall_trebol_ccp'>Mall Plaza el trebol</a>
										<a href='<?php echo base_url('mall/malldelcentroconcepcion')?>' class='place mall_centro_ccp'>Mall del centro concepción</a>
								</div>
            </div>
        </div>
    </header>
    <!-- Target Section -->
    <section id='skip' style='background-color:#4C5B61'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading' style='color:#FFF'>PASOS</h2>
                    <h3 class='section-subheading' style='color:#fff'>El propósito de esta plataforma es calcular cuánto es lo que tienes que pagar al momento de validar tu ticket de parking en los distintos malls del país. Los pasos para calcular tu parking son sencillos!. Te los detallamos de la siguiente manera:</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12 color-white'>
                    <p class='circle'>1</p> Selecciona el lugar donde te encuentras, ¿en qué mall estás?. Debes estar en un mall. <br>
                    <p class='circle'>2</p> Ingresa tu hora de llagada en hora y minutos que está registrada en el ticket de estacionamiento. <br>
										<p class='circle'>3</p> Nuestra plataforma calculará cuanto debes pagar según el lugar en donde estés.
                </div>
            </div>
						<div class='col-lg-12 text-center' style='padding-top:30px;'>
                    <h2 class='section-heading' style='color:#FFF'>Listo! eso es todo.</h2>
                    <h3 class='section-subheading' style='color:#fff;'>Solo falta que saques tu dinero y canceles tu parking. De esta forma podrás llegar con tu dinero en la mano y así no pierdes tiempo!.</h3>
                </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id='contact' style='background-color:#c4cad0'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading less-size' style='color:#000'>Contactame</h2>
                    <h3 class='section-subheading' style='color:#000'>Deseas opinar/sugerir/felicitar/contactarme?. Llena el formulario con tus datos y contáctame!</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                    <form name='sentMessage' id='contactForm' novalidate>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' placeholder='Tu Nombre *' id='name' required data-validation-required-message='Por favor, ingresa tu nombre.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                                <div class='form-group'>
                                    <input type='email' class='form-control' placeholder='Tu Correo *' id='email' required data-validation-required-message='Por favor, ingresa tu correo.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                                <div class='form-group'>
                                    <input type='tel' class='form-control' placeholder='Tu Teléfono *' id='phone' required data-validation-required-message='Por favor, ingresa tu número de teléfono.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <textarea class='form-control' placeholder='Tu Mensaje *' id='message' required data-validation-required-message='Por favor, ingresa tu mensaje.'></textarea>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                            <div class='clearfix'></div>
                            <div class='col-lg-12 text-center'>
                                <div id='success'></div>
                                <button type='submit' class='btn btn-xl'>Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
			</section>

</body>
