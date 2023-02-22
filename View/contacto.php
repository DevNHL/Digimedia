<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="../css/stylos.css?130220">
    <link rel="stylesheet" href="../css/header.css">
    <script type="text/javascript">
        function valideKey(evt) {

            var code = (evt.which) ? evt.which : evt.keyCode;

            if (code == 8) {
                return true;
            } else if (code >= 48 && code <= 57) {
                return true;
            } else {
                return false;
            }
        }
    </script>

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
    <?php include 'header.html' ?>
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <form id="formulario" class="card cards2" action="blog.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-warning  ale  text-center" role="alert" id="alert">
                                    Datos enviados correctamente
                                </div>
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class="pt-3"></div>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombres y Apellidos">
                            <small></small>
                        </div>
                        <div class="mb-3">
                            <div class="pt-3"></div>
                            <input type="email" class="form-control" id="email" placeholder="email">
                            <small></small>
                        </div>
                        <div class=" mb-3">
                            <div class="pt-3"></div>
                            <input type="text" class="form-control" id="telefono" onkeypress="return valideKey(event);" placeholder="Telefono">
                            <small></small>
                        </div>
                        <div class=" mb-3">
                            <div class="pt-3"></div>
                            <textarea name="mensajes" class="me" id="mensaje" cols="30" rows="4" placeholder="Mensaje"></textarea>
                            <small></small>
                        </div>
                        <button type="submit">Enviar</button>
                        <div class="pt-3"></div>
                    </form>

                </div>



                <div class="pt-3"></div>
            </div>
        </div>
    </div>
    <div class="pt-5"></div>
    <?php include 'footer.html' ?>
</body>
<!--scripts-->
<script src="../js/formulalriovalidasegundo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>