<?php
session_start();

include '../conexion/conexion.php';

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
    include("index.php");
    echo "Nombre de usuario o contraseña inválidos";
}

    // Cerrar la conexión con la base de datos
    mysqli_close($conn);
?>