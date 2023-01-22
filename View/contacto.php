<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
   <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="../css/stylos.css">
    <script type="text/javascript">
		function valideKey(evt){
			
			// code is the decimal ASCII representation of the pressed key.
			var code = (evt.which) ? evt.which : evt.keyCode;
			
			if(code==8) { // backspace.
			  return true;
			} else if(code>=48 && code<=57) { // is a number.
			  return true;
			} else{ // other keys.
			  return false;
			}
		}
        
	</script>
</head>

<body>
   
    <?php include '../assets/header_view.html' ?>
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-3">
                    <div class="card cards" style="">
                      <div class="card-body ">
                        <h4 class="card-title letra2 " id="messageLabel">CONT&Aacute;CTANOS</h4>
                        <h6 class="card-text p-2">Nos motivan los nuevos retos ¡Agendemos una reunión!
                        </h6>
                        
                      </div>
                      <form id="formulario" class="card cards2" action="blog.php" >
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="alert alert-warning  ale  text-center" role="alert" id="alert">
                                         Datos enviados correctamente
                                    </div>
                                </div>
                            </div>
                            <div class=" mb-3">
                                <label for="nombre">Nombres y apellidos:</label><div class="pt-3"></div>
                                <input type="text" class="form-control" id="nombre" >
                                <small></small>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email:</label><div class="pt-3"></div>
                                <input type="email" class="form-control" id="email" >
                                <small></small>
                            </div>
                            <div class=" mb-3">
                                <label for="floatingInput">Telefono:</label><div class="pt-3"></div>
                                <input type="text" class="form-control" id="telefono" onkeypress="return valideKey(event);">
                                <small></small>
                            </div>
                            <div class=" mb-3">
                                <label for="floatingTextarea">Mensaje:</label><div class="pt-3"></div>
                                <textarea name="mensajes" class="form-control" id="mensaje" cols="30" rows="4" placeholder="......"></textarea> 
                                <small></small>
                            </div>
                            <button type="submit" >Enviar</button>
                            <div class="pt-3"></div>
                    </form>

                    </div>
                    <div class="pt-3"></div>
                    
                </div>
            </div>
        </div>    
    </div>
    <div class="pt-5"></div>
    <?php include '../assets/footer.html' ?>
</body>
<script src="../js/letra.js"></script>
<script src="../js/formulalriovalidasegundo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>