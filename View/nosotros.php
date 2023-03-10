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
    <link rel="stylesheet" href="../css/nosotros.css">
    

 
</head>

<body>
    <?php include 'header.html' ?>

    <div class="contenedor-imagen">
      <img src="../img/Nos_juntos.webp" alt="Imagen con transparencia completa">
      <div class="contenedor-texto">
        QUIÉNES SOMOS
      </div>
    </div>

    <style>

      body {
        margin: 0;
      }

      .contenedor-imagen {
        
        background-color: rgba(241, 8, 117, 0.959);
        width: 100%;
        height: 500px;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .contenedor-imagen img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.5;
      }

      .contenedor-texto {
        position: absolute;
        top: 58%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
         font-size: 110px;
         width: 100%;
        margin: 0;
        font-family: 'Fredoka One', cursive;

      }

      .contenedor-texto{
  text-decoration: underline;
  text-decoration-color: #ffff;
  text-decoration-thickness: 2px;
  text-underline-offset: 20px;
  transition: text-decoration 0.3s ease-in-out; /* establece la transición */
}

.contenedor-texto:hover {
  text-decoration: none; /* quita el subrayado cuando se pasa el mouse por encima */
}

    </style>
</body>
<div class="pt-5"></div>

<div class="banner">
  <div class="content">
    <h1>NOSOTROS</h1>
    <p>Digimedia es una empresa de marketing digital, que se enfoca en potenciar tu emprendimiento a nivel online. Digimedia, le brinda a tu emprendimiento estrategias que ayuden a cumplir los objetivos de manera eficaz. Somos un grupo de personas comprometidas con el desarrollo de cada marca que nos contacta.</p>
  </div>
  <img src="../img/Nos_viendo.webp" alt="Descripción de la imagen">
</div>
<div class="pt-5"></div>

<div class="container2">
  <div class="left">
    <h2><img src="../img/mirador.svg" alt="Icono" class="icono" style="width: 3.5rem; height: 3.5rem; margin-right: 0.8rem;">Misión</h2>
    <p style="font-size: 1.3rem; line-height: 1.6; text-align: justify; margin-top: 2rem;">Ser aliado de los emprendimientos en su posicionamiento digital; mediante la generación de contenido estratégico que garantice el cumplimiento de los objetivos planteados.</p>
  </div>
  <div class="right">
    <h2><img src="../img/vision.svg" alt="Icono" class="icono" style="width: 3.5rem; height: 3.5rem; margin-right: 0.8rem;">Visión</h2>
    <p style="font-size: 1.3rem; line-height: 1.6; text-align: justify; margin-top: 2rem;">Liderar la transformación digital de las PYME en el Perú; estableciendo vínculos sólidos entre nuestros clientes y sus respectivas audiencias.</p>
  </div>
</div>

<div class="pt-5"></div>


<section id="valores">
  <article class="valores1">
    <h1><img src="../img/brazos.svg" alt="Icono" class="icono">NUESTROS VALORES</h1>
    <p>En nuestra DigiMedia, creemos que nuestros valores son la clave de nuestro éxito y nos guían en todas nuestras decisiones y acciones.</p>
  </article>
</section>

<div class="pt-5"></div>


<div class="contenedor9">
  <div class="items"> 
    <h2>Responsabilidad</h2>
    <p>Nos esforzamos por ser responsables con nuestros clientes, nuestro personal y nuestro medio ambiente.</p>
  </div>
  <div class="items"> 
    <h2>Innovación</h2>
    <p>Creemos en la importancia de pensar fuera de la caja y ser pioneros en la implementación de soluciones innovadoras.</p>
  </div>
  <div class="items"> 
    <h2>Adaptabilidad</h2>
    <p>Somos flexibles y estamos dispuestos a aprender y cambiar para tener éxito en un entorno en constante cambio.</p>
  </div>

    <div class="items" > 
    <h2>Trabajo en equipo</h2>
    <p>Fomentamos un ambiente de colaboración y apoyo en el que todos puedan prosperar y alcanzar su máximo potencial.</p>
  </div>



    <div class="items"> 
    <h2>Compromiso</h2>
    <p>Estamos comprometidos con nuestro trabajo y con lograr un impacto positivo en la comunidad.</p>

  </div>
  
</div>





    <br><br><br>
    <?php include 'footer.html' ?>
</body>

</html>