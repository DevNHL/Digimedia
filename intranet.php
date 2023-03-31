<?php session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.5/xlsx.full.min.js"></script>

    <!--    Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js" integrity="sha512-sk0cNQsixYVuaLJRG0a/KRJo9KBkwTDqr+/V94YrifZ6qi8+OO3iJEoHi0LvcTVv1HaBbbIvpx+MCjOuLVnwKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




</head>

<body>
    
    <br>
    <h1 class="text-center">Contactos Lista</h1>
    <center>
    <button onclick="exportToExcel()">Exportar a Excel</button>
    <button  id="pdfout">Generar PDF</button>


    <a type="button" class="btn btn-primary" href="admin/logout.php">Cerrar Sesion</a>
    <a type="button" class="btn btn-primary" href="admin/usuarios/index.php">Lista Usuarios</a>
    </center>
    <br>

    <div class="table-responsive px-5 ">
    <table class="table table-striped table-bordered" id="miTabla">
      <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">SERVICIO</th>
            <th scope="col">NUMERO</th>
            <th scope="col">MENSAJE</th>
            <th scope="col">EMAIL MARK</th>
            <th scope="col">NEW</th>
            <th scope="col">PRODUCTION</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">ACCION</th>
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
            $sql_registe = mysqli_query($conn, "SELECT COUNT(*) as total_registro FROM contactanos");
            $result_register = mysqli_fetch_array($sql_registe);
            $total_registro = $result_register['total_registro'];

            $por_pagina = 50;

            if (empty($_GET['pagina'])) {
                $pagina = 1;
            } else {
                $pagina = $_GET['pagina'];
            }

            $desde = ($pagina - 1) * $por_pagina;
            $total_paginas = ceil($total_registro / $por_pagina);

            $query = mysqli_query($conn, "SELECT * FROM contactanos 
                                     ORDER BY id 
                                     ASC LIMIT $desde,$por_pagina");

            mysqli_close($conn);

            $result = mysqli_num_rows($query);
            if ($result > 0) {

                while ($data = mysqli_fetch_array($query)) {
            ?>
                    <tr>

                        <td scope="row"><?php echo $data['id'] ?></td>
                        <td><?php echo $data['nombre'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['servicio'] ?></td>
                        <td><?php echo $data['numero'] ?></td>
                        <td><?php echo $data['mensaje'] ?></td>
                        <td><?php echo $data['emailMarck'] ?></td>
                        <td><?php echo $data['new'] ?></td>
                        <td><?php echo $data['production'] ?></td>
                        <td><?php echo $data['fecha'] ?></td>
                        <td><?php echo $data['hora'] ?></td>

                        <td style="text-align: center" id="sx">
                            <form action="View/atendido.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('&iquest Esta seguro de que desea dar por atendido?');">Atendido</button>
                            </form>
                        </td>

                    </tr>
            <?php
                }
            } ?>
        </tbody>
    </table>
    </div>
    </main>

     
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/export.js"></script>
<script src="js/pdf.js"></script>

</html>