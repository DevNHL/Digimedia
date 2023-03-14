<?php
    // Datos para la conexión
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'digimedia';

  // Conexión a bd - MySQL
  $conn = mysqli_connect($server, $user, $pass, $db);

   //if(isset($conn)){
   //  echo 'DB is connect';
   //}

    $nom=$_POST['nombre'];
    $em=$_POST['email'];
    $ser=$_POST['servicio'];
    $num=$_POST['numero'];
    $men=$_POST['mensaje'];
    $emM=$_POST['emailMarck'];
    $new=$_POST['new'];
    $pro=$_POST['production'];
    $sql = "INSERT INTO `contactanos` (`id`, `nombre`, `email`, `servicio`, `numero`, `mensaje`, `emailMarck`, `new`, `production`) 
            VALUES (NULL, '$nom', '$em', '$ser', '$num', '$men', '$emM', '$new', '$pro')";
    $resultado = mysqli_query($conn, $sql);

    // Comprobar si los datos se han insertado correctamente
    if ($resultado) {
        header("Location: contacto.php");
    } else {
        echo "Ha habido un error al insertar los datos: " . mysqli_error($conn);
    }

    // Cerrar la conexión con la base de datos
    mysqli_close($conn);
?>