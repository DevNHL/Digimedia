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

$username = $_POST["usuario"];
$password = $_POST["contrasena"];

// Consulta para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND contrasena = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Credenciales válidas, redireccionar al usuario a una página de bienvenida
    header("Location: ../../intranet.php");
} else {
    // Credenciales inválidas, mostrar un mensaje de error
    echo "Nombre de usuario o contraseña inválidos";
}

    // Cerrar la conexión con la base de datos
    mysqli_close($conn);
?>