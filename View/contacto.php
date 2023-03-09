<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="../css/stylos.css?130220">
    <link rel="stylesheet" href="../css/header.css">
    
</head>

<body>
    <?php include 'header.html' ?>
    <div class="contactanos-image " id="banner">
        <div class="sombra">
        </div>
        <div class="letra" id="">
            <div class="borde" id="digimedia">
                <p class="" id=""><u class="delgado">CONTÁCTANOS</u></p>
            </div>
        </div>
    </div>
        <div class="pt-5"></div>
            <div class="container">
                <div class="col-md-10 offset-md-1">
                <form id="formulario" class="" action="blog.php">
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-warning  ale  text-center" role="alert" id="alert">
                                    Datos enviados correctamente
                                </div>
                            </div>
                        </div>

                    <div class="row">    
                        <div class="col-md-6">
                        <div class="mb-3">
                            <div class="pt-3">Nombre</div>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombres y Apellidos">
                            <small></small>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <div class="pt-3">Email</div>
                            <input type="email" class="form-control" id="email" placeholder="email">
                            <small></small>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <div class="pt-3">Servicio</div>
                            <select class="form-control" id="servicio">
                                <option hidden>--Servicio--</option>
                                <option value="#">1</option>
                                <option value="#">2</option>
                            </select>
                            <small></small>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <div class="pt-3">Numero</div>
                            <input type="text" class="form-control" id="telefono" onkeypress="return valideKey(event);" placeholder="Telefono">
                            <small></small>
                        </div>
                        </div>
                    </div>

                        <div class="mb-3">
                            <div class="pt-3">Mensaje</div>
                            <textarea name="mensajes" class="form-control" id="mensaje" cols="30" rows="4" placeholder="Mensaje"></textarea>
                            <small></small>
                        </div>
                        <div class="mb-3">
                            <div class="pt-3"></div>
                            <input type="checkbox" name="Email Marketing" value="Marketing" id="check"> Email Marketing
                            <div class="pt-3"></div>
                            <input type="checkbox" name="Email Marketing" value="Marketing" id="check"> News & Updates Emails
                            <div class="pt-3"></div>
                            <input type="checkbox" name="Email Marketing" value="Marketing" id="check"> Production Process Emails
                        </div>
                        <button type="submit">Enviar</button>
                        
                </form>

                </div>
            </div>
        </div>
    
    <div class="pt-5"></div>
    <?php include 'footer.html' ?>
</body>

</html>