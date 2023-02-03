<?php

session_start();

include "conexion.php";

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username']=$username;

$consulta = "SELECT * from usuarios where username = '$username' and password='$password'";
$resultado=mysqli_query($mysqli,$consulta);

$filas = mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");

}else
if($filas['id_cargo']==2){ //secretaria
header("location:secretaria.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

<html>

</html>