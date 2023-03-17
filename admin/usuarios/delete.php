<?php
session_start();

  // Datos para la conexión
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'digimedia';

  // Conexión a bd - MySQL
  $conn = mysqli_connect($server, $user, $pass, $db);


$id=$_POST['id'];
$sql = "DELETE FROM usuarios WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/Digimedia/admin/usuarios/index.php");
  } else {
    echo "Error al eliminar el usuario: " . $conn->error;
  }

?>