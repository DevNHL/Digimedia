<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="css/stylos.css?140223">
    <link rel="stylesheet" href="css/carrosel.css">
</head>

<body>
    <?php include 'assets/header.html' ?>
    <div class="banner-image " id="banner">
        <div class="contenedor-principal">
        </div>
        <div class="banners-letra" id="banners-letra">
            <div class="digimedia" id="digimedia">
                <p class="digimedias" id="dige">DIGIMEDIA</p>
            </div>
            <div class="">
                <div class="creativa" id="creativa">
                    <p>Innovadora y creativa</p>
                </div>

                <div class="contenedor-secundario" id="contenedor-secundario">
                    <p>Estamos enfocados a lograr <span class="text-primary">resultados comerciales</span> y de <span class="text-primary"> marketing</span> con <span class="text-primary"> creatividad</span> y <span class="text-primary"> estrategias.</span></p>
                </div>

            </div>
            <div class="bt" id="bt">
                <input type="submit" class="boton" value="Contactar" id="prima">
            </div>
        </div>
    </div>
    <div class="pt-4"></div>
    <div class="container">
        <h4 class="letra-sub">Servicios de Marketing</h4>
    </div>
    <div class="container ">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-3" style="max-width: 1250px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" id="img-fluid" alt="Marketing digital" src="img/lapto.webp">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" id="tit">Marketing Digital</h5>
                                    <p class="card-text">En Digimedia te ayudamos con el desarrollo de tu página web, con una estrategia de marketing digital que encaje con el rubro de tu negocio y los objetivos de este, con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                    <div class="divbut">
                                        <a type="button" class="boton-card" id="botons1" href="">Ver m&aacute;s</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3" style="max-width: 1250px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" id="img-fluid" alt="imagen corporativa" src="img//imagen_coorporativa.webp">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Imagen Corporativa</h5>
                                    <p class="card-text">En Digimedia te ayudamos con el desarrollo de tu página web, con una estrategia de marketing digital que encaje con el rubro de tu negocio y los objetivos de este, con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                    <div class="divbut">
                                        <a type="button" class="boton-card" id="botons1" href="">Ver m&aacute;s</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mb-3" style="max-width: 1250px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" id="img-fluid" alt="Gesti&oacute;n de Redes Sociales" src="img//redes sociales gestiones.webp">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Gesti&oacute;n de Redes Sociales</h5>
                                    <p class="card-text">En Digimedia te ayudamos con el desarrollo de tu página web, con una estrategia de marketing digital que encaje con el rubro de tu negocio y los objetivos de este, con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                    <div class="divbut">
                                        <a type="button" class="boton-card" id="botons1" href="">Ver m&aacute;s</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="pt-3"></div>
    <div class="container">
        <h4 class="letra-sub">Servicios para tu Marca</h4>
    </div>
    <div class="container ">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-3" style="max-width: 1250px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" id="img-fluid" alt="Marketing digital" src="img/lapto.webp">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" id="tit">Marketing Digital</h5>
                                    <p class="card-text">En Digimedia te ayudamos con el desarrollo de tu página web, con una estrategia de marketing digital que encaje con el rubro de tu negocio y los objetivos de este, con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                    <div class="divbut">
                                        <a type="button" class="boton-card" id="botons1" href="">Ver m&aacute;s</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3" style="max-width: 1250px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" id="img-fluid" alt="imagen corporativa" src="img//imagen_coorporativa.webp">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Imagen Corporativa</h5>
                                    <p class="card-text">En Digimedia te ayudamos con el desarrollo de tu página web, con una estrategia de marketing digital que encaje con el rubro de tu negocio y los objetivos de este, con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                    <div class="divbut">
                                        <a type="button" class="boton-card" id="botons1" href="">Ver m&aacute;s</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mb-3" style="max-width: 1250px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" id="img-fluid" alt="Gesti&oacute;n de Redes Sociales" src="img//redes sociales gestiones.webp">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Gesti&oacute;n de Redes Sociales</h5>
                                    <p class="card-text">En Digimedia te ayudamos con el desarrollo de tu página web, con una estrategia de marketing digital que encaje con el rubro de tu negocio y los objetivos de este, con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                    <div class="divbut">
                                        <a type="button" class="boton-card" id="botons1" href="">Ver m&aacute;s</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="pt-4"></div>
    <div class="con-anun">
        <div class="parrafos">
            <h5 class="titulo">¿Quieres inicar tu empresa digital?</h5>
            <p class="texto"><span class="negrita">EN DIGIMEDIA</span> te brindamos asesor&iacute;a personalizada para emprender o hacer crecer tu negocio</p>
        </div>
        <div class="bota">
            <a href="View/contacto.php" class="boton__" id="be">Contactanos</a>
        </div>
    </div>
    <div class="pt-4"></div>

    <div class="con-anun1">
        <div class="parrafos1">
            <h5 class="titulo1">¿Tienes alguna duda sobre nuestros servicios?</h5>
            <p class="ten">¡Tenemos la respuesta!</p>
            <p class="texto1">Echa un vistazo a nuestra secci&oacute;n de <span class="negrita"> Preguntas Frecuentes</span> donde encontrar&aacute;s respuestas a las preguntas m&aacute;s comunes .</p>
            <p class="infer">Haz clic en el boton "Ver preguntas Frecuentes" para acceder a esta informaci&oacute;n valiosa.</p>
        </div>
        <div class="bota1">
            <a href="" class="boton__1">Preguntas Frecuentes</a>
        </div>
    </div>
    <div class="pt-5"></div>
    <?php include 'assets/footer.html' ?>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/main.js"></script>

</html>