<?php 
//seguridad de sesiones
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if($varsesion==null || $varsesion=''){
    header("location: ../login/index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/consultas.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</head>
<body>
  <main>
    <br>
      <h1 class="text-center">Listado de Usuarios</h1>
    </header>
    <center><a type="button" class="btn btn-primary" href="http://localhost/Digimedia/intranet.php">Regresar</a>
    <a type="button" class="btn btn-primary" href="registrar.php">Registrar Usuario</a>         
    </center>
    <br>
    
<div class="table-responsive px-5 ">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">USUARIO</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        // Datos para la conexión
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'digimedia';

        // Conexión a bd - MySQL
        $conn = mysqli_connect($server, $user, $pass, $db);

        //Paginador
        $sql_registe = mysqli_query($conn,"SELECT COUNT(*) as total_registro FROM usuarios
          ");
        $result_register = mysqli_fetch_array($sql_registe);
        $total_registro = $result_register['total_registro'];

        $por_pagina = 15;

        if(empty($_GET['pagina']))
        {
          $pagina = 1;
        }else{
          $pagina = $_GET['pagina'];
        }

        $desde = ($pagina-1) * $por_pagina;
        $total_paginas = ceil($total_registro / $por_pagina);

        $query = mysqli_query($conn,"SELECT id, usuario,contrasena,nombre FROM usuarios 
                                     ORDER BY id 
                                     ASC LIMIT $desde,$por_pagina");

        mysqli_close($conn);

        $result = mysqli_num_rows($query);
        if($result > 0){

          while ($data = mysqli_fetch_array($query)) {
        ?>
          <tr>

            <td scope="row"><?php echo $data['id']?></td>
            <td><?php echo $data['usuario']?></td>
            <td><?php echo $data['contrasena']?></td>
            <td><?php echo $data['nombre']?></td>
            
            <td style="text-align: center">
              <form action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data ['id']?>">
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar este usuario?');">Eliminar</button>
              </form>
            </td>
            
            </tr>
        <?php 
          } 
        }?>
      </tbody>
    </table>
  </div>
  </main>
  
      </thead>
</body>
</html>