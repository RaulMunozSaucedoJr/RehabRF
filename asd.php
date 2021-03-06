<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="/Assets/SCSS/Estilos.css" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/Assets/ICON/Logo.jpg" />
    <title>Rehabilitación Funcional - RF</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar"> <a class="navbar-brand"
            href="/Index.html"> <img src="/Assets/ICON/Logo.jpg" class="navbar__Logo d-inline-block align-top img-fluid"
                alt="Logo Navbar" /> Rehab-RF </a> <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> </button>
        <div class="navbar__collapse collapse navbar-collapse align-items-center" id="navbarNav">
            <ul class="navbar__navbar-nav navbar-nav text-center align-items-center">
                <li class="navbar__nav-item nav-item ml-5"> <a class="nav-link" href="#Nosotros">Nosotros</a></li>
                <li class="navbar__nav-item nav-item ml-5"> <a class="nav-link" href="#Servicios">Servicios</a></li>
                <li class="navbar__nav-item nav-item ml-5"> <a class="nav-link" href="#Contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class="mb-nav fixed-bottom">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active"> <a href="#Nosotros"> <i class="bx bxs-wink-smile"></i> </a></div>
        <div class="mb-nav-item"> <a href="#Servicios"> <i class="bx bxs-food-menu"></i> </a></div>
        <div class="mb-nav-item"> <a href="#Contacto"> <i class="bx bxs-comment-detail"></i> </a></div>
        <div class="mb-nav-item"> <a id="scroll-top" href="#Nosotros"> <i class="bx bxs-to-top"></i> </a></div>
    </div>
    <div class="container/fluid pt-5 mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="Mensaje__Salud">
            <div class="section__alerta alert alert-dismissible fade show" role="alert"> <button type="button"
                    class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="negroo alert-heading">¡Estimado Paciente!</h4>
                <p class="negro"> Se le recuerda que <b>NO</b> se atenderá a <b>NADIE</b> que no cumpla con los
                    protocólos de sanidad impuestos por la Secretaría de Salud Pública.</p class="negro">
                <hr>
                <p class="negroo mb-0">Para cualquier aclaración no dude en ponerse en contacto con nosotros antes de
                    que nos honre con su visita.</p>
            </div>
        </div>
    </div>
    <section class="section pt-5 mb-5" id="Nosotros">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 class="section__Titulo"><strong> Nosotros </strong></h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-5 mb-5">
                    <p class="section__Parrafo"> En <strong>REHAB</strong> somos un equipo multidisciplinario con el
                        objetivo de mejorar la calidad de vida de nuestros pacientes, eliminar su dolor y evitar la
                        aparición del mismo.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-5 mb-5"> <img
                        src="/Assets/IMG/SeccionNosotros.jpg" class="section__Imagen__Nosotros img-fluid"
                        alt="Imagen Nosotros" /></div>
            </div>
        </div>
    </section>
    <section class="section pt-5 mb-5" id="Servicios">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 class="section__Titulo"><strong> Servicios </strong></h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-* col-lg-4 col-xl-4 pt-5 mb-5" data-aos="fade-right"
                    data-aos-duration="500">
                    <div class="section__card card"> <img src="/Assets/IMG/Servicio1.jpg"
                            class="section__Imagen__Carta img-fluid" alt="Imagen Servicio 1" />
                        <div class="section__card__body card-body pb-3 mb-2">
                            <h5 class="section__card__title card-title"> Rehabilitación Deportiva</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-* col-lg-4 col-xl-4 pt-5 mb-5" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="section__card card"> <img src="/Assets/IMG/Servicio2.jpg"
                            class="section__Imagen__Carta img-fluid" alt="Imagen Servicio 2" />
                        <div class="section__card__body card-body pb-3 mb-2">
                            <h5 class="section__card__title card-title"> Rehabilitación Ortopédica</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-* col-lg-4 col-xl-4 pt-5 pb-5 mb-5" data-aos="fade-left"
                    data-aos-duration="500">
                    <div class="section__card card"> <img src="/Assets/IMG/Servicio3.svg" class="section__Imagen__Carta"
                            alt="Imagen Servicio 3" />
                        <div class="section__card__body card-body pb-3 mb-2">
                            <h5 class="section__card__title card-title"> Rehabilitación Estética</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <p class="section__Parrafo__Contacto text-center pt-1 mb-1"> <a
                    href="/Assets/IMG/ListadoCompletoServicios.jpg" download="/Assets/IMG/ListadoCompletoServicios.jpg">
                    Descargar Listado Completo <i class="section__Descargar__Listado bx bx-download"></i> </a></p>
        </div>
    </section>
    <section class="section pt-5 mb-5" id="Contacto">
        <div class="container" id="DireccionTelefonos">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 class="section__Titulo"><strong> Contacto </strong></h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 pt-5 mb-5" id="ImagenContacto1"> <img
                        src="/Assets/IMG/Direccion.jpg" class="section__Imagen__Contacto img-fluid"
                        alt="Imagen Nosotros" /></div>
                <div class="section__DireccionTelefonos col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-5 mb-5">
                    <h1 class="section__Contacto pt-5 mb-2">Dirección & Teléfonos</h1>
                    <p class="section__Parrafo__Contacto text-center pt-1 mb-1"> <i
                            class="section__Iconos__Contacto bx bx-map"></i> <a
                            href="https://www.google.com/maps/place/Antonio+Sola+2,+Colonia+Condesa,+Cuauht%C3%A9moc,+06140+Ciudad+de+M%C3%A9xico,+CDMX/@19.4141917,-99.1744182,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff46b6b194bf:0xeae3764bdc50287d!8m2!3d19.4141917!4d-99.1722295">
                            Antonio Sola #2, Colonia Condesa, Cuauhtemóc. </a></p>
                    <p class="section__Parrafo__Contacto text-center pt-1 mb-1"> <i
                            class="section__Iconos__Contacto bx bx-mail-send"></i> <a
                            href="mailto:funcionalrehaboficial@gmail.com"> funcionalrehaboficial@gmail.com </a></p>
                    <p class="section__Parrafo__Contacto text-center pt-1 mb-1"> <i
                            class="section__Iconos__Contacto bx bxl-facebook"></i> <a
                            href="https://www.facebook.com/Funcional-Rehab-103388395160478"> Funcional Rehab </a></p>
                    <p class="section__Parrafo__Contacto text-center pt-1 mb-1"> <i
                            class="section__Iconos__Contacto bx bx-phone"></i> <a href="tel:+5531963823"> 55-3196-3823
                        </a></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 pt-5 mb-5" id="ImagenContacto2"> <img
                        src="/Assets/IMG/Telefonos.jpg" class="section__Imagen__Contacto img-fluid"
                        alt="Imagen Contacto" /></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-5 mb-5">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1 class="section__Titulo pt-5 mb-5">Contacto Directo</h1>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="ImagenContacto3"
                            data-aos="fade-down" data-aos-duration="1000"> <img src="/Assets/IMG/Formulario.jpg"
                                class="section__Imagen__Nosotros img-fluid" alt="Imagen Contacto" /></div>
                        <div class="section__Formulario col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="formulario">
                            <form method="POST" class="formulario needs-validation" data-netlify-recaptcha="true"
                                action="/Gracias.html" id="formulario" type="hidden" name="formulario" netlify
                                novalidate>
                                <div class="form-row">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2 mb-1">
                                        <label for="Email4">Nombre Completo</label> <input type="text"
                                            class="form-control" id="nombre" placeholder="Nombre Completo" /></div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2 mb-1">
                                        <label for="Password4">Correo Electrónico</label> <input type="email"
                                            class="form-control" id="correo" placeholder="Correo Electrónico" /></div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2 mb-1">
                                        <label for="Password4">Teléfono</label> <input type="tel" class="form-control"
                                            id="telefono" placeholder="Numero Telefónico" /></div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2 mb-1">
                                        <label for="Password4">Motivo de su Mensaje</label> <input type="text"
                                            class="form-control" id="motivo" placeholder="Motivo de su mensaje" /></div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2 mb-1">
                                        <div class="d-flex justify-content-center" data-netlify-recaptcha="true"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 mb-3"> <button
                                            type="submit"
                                            class="section__Boton__Servicios btn btn-outline-* btn-sm pt-2 pb-2"
                                            id="Enviar"> Contactenos <i
                                                class="section__Iconos__Botones bx bx-mail-send"></i> </button></div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 mb-3"> <button
                                            type="reset"
                                            class="section__Boton__Servicios btn btn-outline-* btn-sm pt-2 pb-2"
                                            id="Enviar"> Borrar <i class="section__Iconos__Botones bx bx-eraser"></i>
                                        </button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer pt-5 mb-5" id="Contacto">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <h1 class="footer__Titulo">Info Programador</h1>
                    <p class="footer__Parrafos pt-3 mb-3"> <a href="mailto:raulmunozsaucedo@hotmail.com"> <i
                                class="footer__Iconos bx bx-mail-send"></i> Correo Electrónico </a></p>
                    <p class="footer__Parrafos mb-3"> <a href="https://developbear.netlify.app/"> <i
                                class="footer__Iconos bx bx-briefcase-alt"></i> Portafolio </a></p>
                    <p class="footer__Parrafos mb-3"> <a
                            href="https://www.linkedin.com/in/ra%C3%BAl-jasiel-uriel-mu%C3%B1oz-saucedo-989b419a/"> <i
                                class="footer__Iconos bx bxl-linkedin"></i> Linkedin </a></p>
                    <p class="footer__Parrafos mb-3"> <a href="https://github.com/RaulMunozSaucedoJr"> <i
                                class="footer__Iconos bx bxl-github"></i> Github </a></p>
                    <p class="footer__Parrafos"> <a href="tel:+5545222062"> <i
                                class="footer__Iconos bx bx-phone-call"></i> Movil </a></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <h1 class="footer__Titulo">Nuestros Aliados</h1>
                    <p class="footer__Parrafos pt-3 mb-3"> <a href="https://developbear.netlify.app/"> <i
                                class="footer__Iconos bx bx-world"></i> Developbear - Web & Software </a></p>
                    <p class="footer__Parrafos pt-3 mb-3"> <a href="https://biotechplantascarnivoras.netlify.app/"> <i
                                class="footer__Iconos bx bx-world"></i> Biotec - Plantas Carnívoras </a></p>
                    <p class="footer__Parrafos pt-3 mb-3"> <a href="https://disenosysoluciones.netlify.app/"> <i
                                class="footer__Iconos bx bx-world"></i> Diseños & Soluciones </a></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <h1 class="footer__Titulo">Mapa del Sitio</h1>
                    <p class="footer__Parrafos pt-3 mb-3"> <a href="#Nosotros"> Nosotros </a></p>
                    <p class="footer__Parrafos pt-3 mb-3"> <a href="#Servicios"> Servicios </a></p>
                    <p class="footer__Parrafos pt-3 mb-3"> <a href="#Contacto"> Contacto </a></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> <img src="/Assets/IMG/Mapa.svg"
                        class="img-fluid" alt="Ilustración Ubicación" />
                    <p class="footer__Parrafos pt-3 mb-3"> <a
                            href="https://www.google.com/maps/place/Antonio+Sola+2,+Colonia+Condesa,+Cuauht%C3%A9moc,+06140+Ciudad+de+M%C3%A9xico,+CDMX/@19.4141917,-99.1744182,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff46b6b194bf:0xeae3764bdc50287d!8m2!3d19.4141917!4d-99.1722295">
                            Antonio Sola #2, Colonia Condesa, Cuauhtemóc. </a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>
    <script src="/Assets/JS/App.js"></script>
    <script>
    // form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if ((form.checkValidity() === false)) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>