<?php

//Include "conexion"
include ("conexion.php");

if (isset($_POST['submit'])) {

//Datos a guardar
$nombre =trim($_POST['name']);
$numero =trim($_POST['phone']);
$email =trim($_POST['email']);

//Query
$consulta = "INSERT INTO contpopup(nombre,telefono,correo)
             VALUES ('$nombre','$numero','$email')";
$respuesta = mysqli_query($conectar1,$consulta);
if ($respuesta) {
    ?><h3>Correcto</h3> <?php 
}else{
    ?><h3>Error</h3> <?php 
}

}

?>