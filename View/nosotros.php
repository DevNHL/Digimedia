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
    <div class="contenedor-texto">
      ¿Quienes somos?
    </div>
    <span>Digimedia es una empresa de marketing&nbsp; digital, que se enfoca en potenciar tu&nbsp; emprendimiento a nivel online. Además, le&nbsp; brinda a tu emprendimiento estrategias que&nbsp; ayuden a cumplir los objetivos de manera&nbsp; eficaz. Somos un grupo de personas&nbsp; comprometidas con el desarrollo de cada&nbsp; marca que nos contacta.</span>
  </div>

<style>
  .contenedor-imagen {
    background-color: #6a27b5;
    width: 100%;
    height: 32%;
    display: flex;
    justify-content: center;
  }

  .contenedor-texto {
    position: absolute;
    top: 18%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 56px;
    width: 100%;
    margin: 0;
    font-weight: 600;
    font-family: Arial, sans-serif;
  }
  span{
    position: absolute;
    top: 30%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: justify;
    font-size: 1rem;
    width: 50%;
    margin: 0;
    font-family: Arial, sans-serif;
  }

  @media (min-width: 200px ) and (max-width: 390px) {
    .contenedor-texto {
      top: 20%;
      font-size: 45px;
      font-weight: 550;
    }
    span{
      top: 45%;
      width: 88%;
    }
    .contenedor-imagen {
      height: 60%;
    }
  }

  /* Estilos para pantallas pequeñas */
  @media (min-width: 391px ) and (max-width: 767px) {
    .contenedor-texto {
      top: 20;
      font-size: 45px;
    }
    span{
      top: 35%;
      width: 80%;
    }
    .contenedor-imagen {
      height: 45%;
    }
  }

  /* Estilos para tabletas */
  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .contenedor-texto {
      font-size: 50px;
    }
    span{
      top: 33%;
    }
    .contenedor-imagen {
      height: 40%;
    }
  }
</style>


</body>
<div class="pt-5"></div>

<div class="banner">
  <img src="../img/nos_mision.webp" alt="Descripción de la imagen">
  <div class="content">
    <h1>Misi&oacute;n</h1>
    <p>Ser aliado de los emprendimientos en su posicionamiento digital; mediante la generación de contenido estratégico que garantice el cumplimiento de los objetivos planteados.</p>
  </div>
</div>
<div class="pt-5"></div>

<div class="banner">
  <div class="content">
    <h1>Visi&oacute;n</h1>
    <p>Ser aliado de los emprendimientos en su posicionamiento digital; mediante la generación de contenido estratégico que garantice el cumplimiento de los objetivos planteados.</p>
  </div>
  <img src="../img/nos_vision.webp" alt="Descripción de la imagen">
</div>

<div class=conten>
    <div class="pt-5"></div>

    <section id="titulo">
    <h1>Valores</h1>
    </section>

    <section id="valores">
    <article class="valores1">
      <p>En nuestra DigiMedia, creemos que nuestros valores son la clave de nuestro éxito y nos guían en todas nuestras decisiones y acciones.</p>
    </article>
    </section>

    <div class="pt-5"></div>

    <div class="container">

      <div class="img">
      <img src="../img/nos_responsabilidad.webp" alt="" style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;" fetchpriority="high"/>
        <div class="tit">
          <b><p>Responsabilidad</p></b>
        </div>
        <div class="con">
          <p class="a">Nos esforzamos por ser responsables con nuestros clientes, nuestro personal y nuestro medio ambiente.</p>
        </div>
      </div>

      <div class="img">
      <img src="../img/nos_innovacion.webp" alt="" style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;" fetchpriority="high"/>
        <div class="tit">
          <b><p>Innovación</p></b>
        </div>
        <div class="con">
          <p class="b">Creemos en la importancia de pensar fuera de la caja y ser pioneros en la implementación de soluciones innovadoras.</p>
        </div>
      </div>

      <div class="img">
      <img src="../img/nos_adaptavilidad.webp" alt="" style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;" fetchpriority="high"/>
        <div class="tit">
          <b><p>Adaptavilidad</p></b>
        </div>
        <div class="con">
          <p class="c">Somos flexibles y estamos dispuestos a aprender y cambiar para tener éxito en un entorno en constante cambio.</p>
        </div>
      </div>

      <div class="img">
      <img src="../img/nos_trabajo.webp" alt="" style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;" fetchpriority="high"/><br>
        <div class="tit">
          <b><p>Trabajo en equipo</p></b>
        </div>
        <div class="con">
          <p class="e">Fomentamos un ambiente de colaboración y apoyo en el que todos puedan prosperar y alcanzar su máximo potencial.</p>
        </div>
      </div>

      <div class="img">
      <img src="../img/nos_compromiso.webp" alt="" style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;" fetchpriority="high"/>
        <div class="tit">
          <b><p>Compromiso</p></b>
        </div>
        <div class="con">
          <p class="f">Estamos comprometidos con nuestro trabajo y con lograr un impacto positivo en la comunidad.</p>
        </div>
      </div>

      <div class="whatsapp">
        <a href="https://wa.me/51999999999" target="_blank"><img src="../img/whatsapp.svg" style="width: 50px; height: 50px;"><p>Whatsapp</p></a>
      </div>

</div>

    <br><br><br>
    <?php include 'footer.html' ?>
</body>


</html>