<?php

session_start();

include "conexion.php";

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION["username"]=$username;

$consulta = "SELECT * from usuarios where username = '$username' and password='$password'";

$resultados = mysqli_query($mysqli,$consulta);

$filas = mysqli_fetch_array($resultado);


if($filas["id_cargo"]==1){
    header("location:admin.php");
}else
    if($filas[""]==2){
        header("location:nouser.php");
    }else{
        ?>
        <?php
        include ("index.html");
        ?>
        <h1 class="bad">ERROR EN LA AUTENTITIFICACON></h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
</body>
</html>