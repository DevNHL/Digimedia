<?php


include '../conexion/conexion.php';

	$id=$_POST['id'];
	$user=$_POST['usuario'];
    $pass=$_POST['contrasena'];
	$nom=$_POST['nombre'];
    $sql = "INSERT INTO `usuarios` ( id , usuario , contrasena, nombre) 
            VALUES ('$id','$user','$pass','$nom')";
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header("Location: http://localhost/Digimedia/admin/usuarios/index.php");
    }else {
        echo "No se insertaron";
    }
?>