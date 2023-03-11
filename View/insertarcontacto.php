<?php
    include "../core/conexion.php";

    $nom=$_POST['nombre'];
    $em=$_POST['email'];
    $ser=$_POST['servicio'];
    $num=$_POST['numero'];
    $men=$_POST['mensaje'];
    $emM=$_POST['emailMarck'];
    $new=$_POST['new'];
    $pro=$_POST['production'];
    $sql = "INSERT INTO 'contactanos' ( nombre , email , servicio , numero , mensaje , emailMarck , new , production)
            VALUES ('$nom','$em','$ser','$num','$men','$emM','$new','$pro')";
?>