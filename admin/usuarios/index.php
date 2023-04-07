<?php
session_start();



if (!isset($_SESSION['usuario'])) {
  // Usuario no autenticado, redirigir a la página de inicio de sesión
  header('Location:../login/index.php');
  exit();
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
  <link rel="stylesheet" href="../../css/stylos.css?45454">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.5/xlsx.full.min.js"></script>

<!--    Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js" integrity="sha512-sk0cNQsixYVuaLJRG0a/KRJo9KBkwTDqr+/V94YrifZ6qi8+OO3iJEoHi0LvcTVv1HaBbbIvpx+MCjOuLVnwKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
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
    
<div class="table-responsive px-5 " id="sx">
    <table class="table table-striped table-bordered" id="miTabla">
      <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">USUARIO</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">NOMBRE</th>
            <th scope="col" >ACCIONES</th>
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

        $por_pagina = 20;

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
            
            <td style="text-align: center" id="ocul">
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
  <div class="cen">
    <button class="btn btn-primary"  onclick="exportToExcel()"><i class="fa-solid fa-file-excel fa-beat"></i></button>
    <button  class="btn btn-primary"  id="pdfout"><i class="fa-solid fa-file-pdf fa-beat"></i></button>
    <button class="btn btn-primary"  onclick="imprimirParteDePagina()"><i class="fa-solid fa-print fa-beat"></i></button>
    </div>
  </main>
  
      </thead>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../../js/export_2.js"></script>
<script src="../../js/pdf_2.js"></script>
<script src="../../js/impresion_2.js"></script>
<script></script>
</html>   