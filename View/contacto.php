<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/conctato.css">
</head>

<body>
    <?php include 'header.html' ?>

    <center >
        <h4 class="h1">Contáctanos</h4>
    </center>
    <div class="principal">
        <div class="pos">
            <div class="imagen">
                
                <h4 class="h1x">Contáctanos</h4>
            </div>
            <div class="formulario">
                <div class="col-md-10 offset-md-1">
                    <form action="insertarcontacto.php" method="post" id="formulario">
                        <input type="text" name="fecha" id="fecha" style="display: none;">
                        <input type="text" name="hora" id="hora" style="display: none;">
                        <?php
                        # si hay un mensaje, mostrarlo
                        if (isset($_GET["mensaje"])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show des" role="alert">
                                <?php echo $_GET["mensaje"] ?>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="pt-3">Nombre</div>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres y Apellidos" required>
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="pt-3">Email</div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                                    <small></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="pt-3">Servicio</div>
                                    <select class="form-control" name="servicio" id="servicio" required>
                                        <option selected disabled value="">--Selecciona--</option>
                                        <option value="Marketing Digital">Marketing Digital</option>
                                        <option value="Imagen Corporativa">Imagen Corporativa</option>
                                        <option value="Gestión De Redes Sociales">Gestión De Redes Sociales</option>
                                        <option value="Crea Tu Marca">Crea Tu Marca</option>
                                        <option value="Diseño web">Diseño web</option>
                                        <option value="Diseño Grafico">Diseño Grafico</option>
                                    </select>
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="pt-3">Numero</div>
                                    <input type="text" class="form-control" name="numero" id="numero" onkeypress="return valideKey(event);" placeholder="Telefono(9 dígitos)" required>
                                    <small></small>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="pt-3">Mensaje</div>
                            <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="4" placeholder="Mensaje" required></textarea>
                            <small></small>
                        </div>

                        <div class="mb-3" id="con">
                            <div class="pt-3 w-100">Opt-in</div>
                            <div class="divs"></div>
                            <div class="divs2"></div>
                            <input type="hidden" name="emailMarck" value="no" id="email">
                            <input type="checkbox" name="emailMarck" value="si" id="email"> Email Marketing
                            <div class="pt-3"></div>
                            <input type="hidden" name="new" value="no" id="new">
                            <input type="checkbox" name="new" value="si" id="new"> News & Updates Emails
                            <div class="pt-3"></div>
                            <input type="hidden" name="production" value="no" id="production">
                            <input type="checkbox" name="production" value="si" id="production"> Production Process Emails
                        </div>

                        <div class="pt-3" id="ps"></div>
                        <input type="submit" value="Enviar" class="enviar">
                        <div class="links">
                            <a href="" class="f">Facebook</a>
                            <a href="" class="i">Instagram</a>
                            <a href="" class="l">Linkedin</a>

                        </div>



                    </form>

                </div>
            </div>
        </div>
        <div class="col">
           
            <div class="cont">
                <div class="grande">
                    <h2 style="font-weight: bold;">Horario de atención</h2>
                </div>
                <div>
                    <p>Lunes - Viernes</p>
                    <p>Sábado</p>
                </div>
                <div>
                    <p>8:00 am - 8:00 pm</p>
                    <p>9:00 am - 7:00 pm</p>
                </div>
            </div>
            
        </div>

        <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126777.96020960424!2d-79.72782079999999!3d-6.7928064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1681256123713!5m2!1ses!2spe"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
        <div>

            <?php include 'footer.html' ?>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".des").fadeOut(1500);
    },3000);
});
</script>
<script>
    const campofecha=document.getElementById("fecha");
    //console.log(campofecha)
    date = new Date().toLocaleDateString();
    campofecha.value=date

    const hora=document.getElementById("hora");
    var today=new Date();
    var horas=today.toLocaleTimeString('en-Us');
    hora.value=horas

</script>

</html>
