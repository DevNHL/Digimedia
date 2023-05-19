<?php
//Include "conexion"
include ("conexion.php");

if (isset($_POST['submit'])) {

//Datos a guardar
$nombre =trim($_POST['name']);
$numero =trim($_POST['phone']);
$email =trim($_POST['email']);

//Query
$consulta = "INSERT INTO DB(campo1,campo2,campo3,...) VALUES ('$nombre','$numero','$email',...)";
$respuesta = mysqli_query($conectar1,$consulta);

}

?>