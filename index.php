<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sytlos.css?20323">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
    <?php include 'asstes/header.html' ?>
    <!--CONTENDOR PRINCIPAL IMAGEN -->
    <div class="contenedor-principal-fondo">
        <div class="banner-image ">
            <div class="banners-letra">
                <div class="digimedia">
                    <p class="digimedias">DIGIMEDIA</p>
                </div>
                <div>
                    <div class="creativa">
                        <p>Innovadora y creativa</p>
                    </div>

                    <div class="contenedor-secundario">
                        <p class="parrfo">Estamos enfocados a lograr <span class="text-info">resultados comerciales</span> y de <span class="text-info"> marketing</span> con <span class="text-info"> creatividad</span> y <span class="text-info"> estrategias.</span></p>
                    </div>

                </div>
                <div class="bt">
                    <a href="View/contacto.php" id="prima"><button class="boton">Conctactar</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4"></div>
    <div class="container">
        <h4 class="letra-sub">Servicios de Marketing</h4>
    </div>
    <!--carrosel-->
    <div id="carouselExampleIndicators" class="carousel slide  d-none d-sm-block">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card mb-3 medida">
                    <div class="row g-0 responsi">
                        <div class="col-md-4">
                            <img src="img/lapto.webp" class="res1 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 s">
                            <div class="card-body">
                                <h5 class="card-title">Marketing Digital</h5>
                                <p class="card-text">En Digimedia ayudaremos a mejorar la imagen de tu marca. Asimismo, a incrementar y conquistar los corazones de tu target.</p>
                                <a href="View/marketing-digital.php"><button class="bton_card">Ver m&aacute;s</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-3 medida">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/imagen_coorporativa.webp" class="res2 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Imagen Corporativa</h5>
                                <p class="card-text">En Digimedia trabajamos en el diseño de tu imagen corporativa para que se covierta en una gran marca.</p>
                                <a href="View/img-corp.php"><button class="bton_card">Ver m&aacute;s</button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-3 medida">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/redes sociales gestiones.webp" class="res3 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Gesti&oacute;n de Redes Sociales</h5>
                                <p class="card-text">En Digimedia te ayudamos , con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                <a href="View/rd-sociales.php"><button class="bton_card">Ver m&aacute;s</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div id="carouselExample" class="carousel slide d-sm-none">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-3 mes">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img class="image" alt="Marketing digital" src="img/lapto.webp">
                                <div class="card-body">
                                    <h5 class="card-title">Marketing Digital</h5>
                                    <p class="card-text">En Digimedia ayudaremos a mejorar la imagen de tu marca. Asimismo, a incrementar y conquistar los corazones de tu target.
                                    </p>
                                    <div class="tid">
                                        <a href="View/marketing-digital.php"><button class="bton_card"> Ver m&aacute;s</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3 mes">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img class="image alt=" Imagen corporativa" src="img//imagen_coorporativa.webp">
                                <div class="card-body">
                                    <h5 class="card-title">Imagen Corporativa</h5>
                                    <p class="card-text">En Digimedia trabajamos en el diseño de tu imagen corporativa para que se convierta en una gran marca.</p>
                                    <a href="View/img-corp.php"><button class="bton_card">Ver m&aacute;s</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3 mes">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img class="image" alt="Gesti&oacute;n de Redes Sociales" src="img//redes sociales gestiones.webp">
                                <div class="card-body">
                                    <h5 class="card-title">Gesti&oacute;n de Redes Sociales</h5>
                                    <p class="card-text">En Digimedia te ayudamos , con el posicionamiento en el mundo online, y con el control que debes tener en tus redes sociales.</p>
                                    <a href="View/rd-sociales.php"><button class="bton_card">Ver m&aacute;s</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <!---carrosel segundo-->
    <div class="pt-4"></div>
    <div class="container">
        <h4 class="letra-sub">Servicios para tu Marca</h4>
    </div>
    <!--carrosel-->
    <div id="carouselExampleIndicatorss" class="carousel slide  d-none d-sm-block">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card mb-3 medida" id="media">
                    <div class="row g-0 responsi">
                        <div class="col-md-4">
                            <img src="img/diseño_web.webp" class="res1 rounded-start " id="es" alt="...">
                        </div>
                        <div class="col-md-8 s">
                            <div class="card-body">
                                <h5 class="card-title">Dise&ntilde;o Web</h5>
                                <p class="card-text">En Digimedia te ayudamos con el desarrollo del diseño web de tu marca. Digimedia, se especializa en el diseño de sitios web modernos, fáciles de usar y que reflejen la marca de su empresa. Trabajamos con usted para entender su negocio y lo que quiere lograr con su sitio web.</p>
                                <a href="View/ds-web.php"><button class="bton_card">Ver m&aacute;s</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-3 medida" id="media1">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/crea tu marca.webp" class="res2 rounded-start " id="es" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Crea tu Marca</h5>
                                <p class="card-text">En Digimedia te ayudamos a desarrollar tu marca desde cero, único y diferenciado para que tenga las máximas garantías de éxito, construimos la identidad visual de tu marca con el objetivo de proporcionarle alma propia, despertar sensaciones y crear conexiones..</p>
                                <a href="View/marca.php"><button class="bton_card">Ver m&aacute;s</button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-3 medida" id="media2">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/diseño grafico.webp" class="res3 rounded-start " id="es" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Dise&ntilde;o Gr&aacute;fico</h5>
                                <p class="card-text">En Digimedia te ayudamos y realizamos coaching en el diseño gráfico de las piezas publicitarias. Nuestro servicio de diseño gráfico publicitario y digital, se centra en buscar crear piezas que vallan acorde con la personalidad y el mensaje de tu marca.</p>
                                <a href="View/rd-sociales.php"><button class="bton_card">Ver m&aacute;s</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div id="carouselExamples" class="carousel slide d-sm-none">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-3 mes1">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img class="image" alt="Marketing digital" src="img/diseño_web.webp">
                                <div class="card-body">
                                    <h5 class="card-title">Dise&ntilde;o Web</h5>
                                    <p class="card-text">En Digimedia te ayudamos con el desarrollo del diseño web de tu marca. Digimedia, se especializa en el diseño de sitios web modernos, fáciles de usar y que reflejen la marca de su empresa. Trabajamos con usted para entender su negocio y lo que quiere lograr con su sitio web.</p>
                                    <div class="tid">
                                        <a href="View/ds-web.php"><button class="bton_card"> Ver m&aacute;s</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3 mes1">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img class="image alt=" Imagen corporativa" src="img/crea tu marca.webp">
                                <div class="card-body">
                                    <h5 class="card-title">Crea tu Marca</h5>
                                    <p class="card-text">En Digimedia te ayudamos a desarrollar tu marca desde cero, único y diferenciado para que tenga las máximas garantías de éxito, construimos la identidad visual de tu marca con el objetivo de proporcionarle alma propia, despertar sensaciones y crear conexiones..</p>
                                    <a href="View/marca.php"><button class="bton_card">Ver m&aacute;s</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3 mes1">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img class="image" alt="Gesti&oacute;n de Redes Sociales" src="img/diseño grafico.webp">
                                <div class="card-body">
                                    <h5 class="card-title">Dise&ntilde;o Gr&aacute;fico</h5>
                                    <p class="card-text">En Digimedia te ayudamos y realizamos coaching en el diseño gráfico de las piezas publicitarias. Nuestro servicio de diseño gráfico publicitario y digital, se centra en buscar crear piezas que vallan acorde con la personalidad y el mensaje de tu marca.</p>
                                    <a href="View/rd-sociales.php"><button class="bton_card">Ver m&aacute;s</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamples" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExamples" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="pt-4"></div>
    <!--primer aviso-->
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
            <a href="View/preguntas.php" class="boton__1">Preguntas Frecuentes</a>
        </div>
    </div>
    <div class="pt-5"></div>
    <?php include 'asstes/footer.html' ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>