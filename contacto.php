<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="css/stylos.css">

</head>

<body>
   
    <?php include 'header_buscador.html' ?>
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-3">
                    <div class="card" style="">
                      <div class="card-body ">
                        <h4 class="card-title letra2" id="messageLabel">Contáctanos</h4>
                        <p class="card-text">Nos motivan los nuevos retos ¡Agendemos una reunión!
                        </p>
                        
                      </div>
                    </div>
                    <div class="pt-3"></div>
                    <form class="">
                            
                            <div class="mb-3">
                                <label  class="form-label">Nombres y Apellidos:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Telefono:</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mensaje:</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>    
    </div>
    <div class="pt-5"></div>
    <?php include 'footer.html' ?>
</body>
<script src="js/letra.js"></script>
</html>