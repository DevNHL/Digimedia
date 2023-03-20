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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="../css/stylos.css?130220">
    <link rel="stylesheet" href="../css/header.css">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/consultas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>
    <br><br>
    <center>
    <a type="button" class="btn btn-primary" href="admin/logout.php">Cerrar Sesion</a>
    <a type="button" class="btn btn-primary" href="admin/usuarios/index.php">Lista Usuarios</a>
    </center>
    <br><br>
    <h1 class="text-center">Contactos Lista</h1>

    <table class="table table-striped table-bordered">
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

                        <td style="text-align: center">
                            <form action="View/atendido.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de que desea dar por atendido?');">Atendido</button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
            } ?>
        </tbody>
    </table>
    </div>

    <div class="paginador">
        <ul>
        <div style="text-align:center;">
            <?php
            if ($pagina != 1) {
            ?>
                <li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
                <li><a href="?pagina=<?php echo $pagina - 1; ?>"><<</a></li>
            <?php
            }
            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($i == $pagina) {
                    echo '<li class="pageSelected">' .$i. '</li>';
                } else {
                    echo '<li><a href="?pagina=' .$i. '">' .$i. '</a></li>';
                }
            }

            if ($pagina != $total_paginas) {
            ?>
                <li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
                <li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
            <?php } ?>
        </div>
        </ul>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>