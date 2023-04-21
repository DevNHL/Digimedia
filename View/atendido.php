<?php
  // Datos para la conexión
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'digimedia';

  // Conexión a bd - MySQL
  $conn = mysqli_connect($server, $user, $pass, $db);

  $id = $_POST['id'];
  //$sql = "DELETE FROM contactanos   WHERE id = $id" ;
  $sql="UPDATE contactanos set estado=0 WHERE id=$id";

if ($conn->query($sql) === TRUE) {
     header("Location: ../intranet.php");
  } else {
    echo "Error al eliminar el reclamo: " . $conn->error;
  }
