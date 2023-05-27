<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="../css/diseno_web.css">
    <!-- Stylos Css para ventana emergente(Prueba 1) -->
    <link rel="stylesheet" type="text/css" href="../css/vent_emrgnt.css">
    
    

</head>

<body class="body">
    <?php include 'header.html' ?>
   <div class="banner">
   
        <div class="principal">
            <div class="letra_titulo">
                <h1 class="d" style="text-transform: uppercase; font-weight: normal; color: white; animation: neon 3s infinite; opacity: 1.2;">DISEÑO Y DESARROLLO WEB</h1>
            </div>
        </div>
   </div>
   <div class="con-anun3" style="background: linear-gradient(to right,#0199FE,#672BB7);">
        <div class="parrafos1">
            <h5 class="titulo1" style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><Big><Big>¿Quieres iniciarte en el mundo digital?</Big></Big></h5>
            <div class="pt-3"></div>
            <p style="font-size:20px; line-height:normal;"><b>En DIGIMEDIA te ayudamos a emprender o hacer crecer tu negocio.</b></p>
        </div>
        <div class="pt-3"></div>
        <div class="bota1">
            <a href="View/preguntas.php" class="boton__2" style="box-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><b>Contactar</b></a>
        </div>
    </div>
   
   <div class="">
        <div class="ser">
        <h4 style="color: white; font-weight: bold;">Servicios de Marketing</h4>
        </div>
        <div class="co" id="">
            <div class="mar">
               
                <a href="marketing-digital.php" class="hover">
                    <p>Marketing Digital</p>
                    <img src="../img/servicio_marketing_digital.webp" alt="">
                </a>
                <a href="img-corp.php" class="hover">
                    <p>Imagen Corporativa</p>
                    <img src="../img/imagen_coorporativa.webp" alt="">
                </a>
                <a href="rd-sociales.php" class="hover">
                    <p>Gesti&oacute; de Redes Sociales</p>
                    <img src="../img/servicio_de_getion_de_redes_sociales.webp" alt="">
                </a>
            </div>
        </div>
   </div>

   <div class="">
        <div class="ser">
        <h4 style="color: white; font-weight: bold;">Servicios para Tu marca</h4>
        </div>
        <div class="cx">
            <div class="mar">
                <a href="ds-web.php" class="hover"> 
                    <p>Diseño Web</p>
                    <img src="../img/servicio_de_diseno_web.webp" alt="">
                </a>
                <a href="marca.php" class="hover">
                    <p>Crear tu Marca</p>
                    <img src="../img/servicio_cambiar_tu_marca.webp" alt="">
                </a>
                <a href="ds-grafico.php" class="hover">
                    <p>Diseño Grafico</p>
                    <img src="../img/servicio_diseno_grafico.webp" alt="">
                </a> 
            </div>
        </div>
   </div>
   </div> 
   <div class="con-anun1" style="background: #FF0C7D;">
    <div class="col-5"></div>
        <table>
        <thead>
            <th class="col-1"></th>
            <th class="col-11"></th>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td><div>
                <iframe style="padding: 60px 300px 0px 0px; float:right" width="860" height="375" allowfullscreen="1" src="https://www.youtube.com/embed/3IT7lLRzs8Y?autoplay=1"></iframe>
                <h2 style="padding: 100px 1000px 0px 0px; font-size:60px;text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;" class="titulo1">¿Por qué necesitas una agencia de marketing?</h5>
            </div></td>
        </tr>
        </tbody>
        </table>
    </div>
   <div class="pt-5"></div>
       <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126777.96020960424!2d-79.72782079999999!3d-6.7928064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1681256123713!5m2!1ses!2spe"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
       </div>
            

           <?php include 'footer.html' ?>
           <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">

                <!--====Solicitud Pop-up====-->
                <div class="registration-form">
                    <h5 class="text-center">Brindanos tus datos</h5>

                    <p class="text-success text-center"></p> <form action="" method="post">

                    <!--//Nombre//-->
                    <div class="form-group">
                    <label for="email">Nombre</label>

                        <input type="text" class="form-control" placeholder="Ingresar Nombre Completo" name="first_name" value="">

                    <p class="err-msg">
                    </p>
                    </div>
                    <!--//Telefono//-->
                    <div class="form-group">
                        <label for="email">Telefono</label>

                        <input type="text" class="form-control" placeholder="Ingresar Telefono Personal" name="last_name" value="">
                        <p class="err-msg"> 

                        </p>
                    </div>

                    <!--//Correo//-->
                    <div class="form-group">
                        <label for="email">Correo:</label>

                    <input type="text" class="form-control" id="email" placeholder="Ingresar Correo" name="email" value="">
                        <p class="err-msg">
                        </p>
                    </div>

                    <button type="submit" class="btn btn-danger" name="submit" style="margin: 10px;">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
