<?php
$username = $_POST["usuario"];
$password = $_POST["contrasena"];
session_start();
$_SESSION['usuario']=$username;

include '../conexion/conexion.php';

// Consulta para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND contrasena = '$password'";
$result = mysqli_query($conn,$sql);

$filas=mysqli_num_rows($result);

if ($filas) {
    // Credenciales válidas, redireccionar al usuario a una página de bienvenida
    header("Location: ../../intranet.php");
} else {
    // Credenciales inválidas, mostrar un mensaje de error
    ?>
    <?php
    include("index.php");
    ?>
    <h1>ERROR EN LA AUTENTICACIÓN</h1>
    <?php
}

    // Cerrar la conexión con la base de datos
    mysqli_free_result($result);
    mysqli_close($conn);
?>