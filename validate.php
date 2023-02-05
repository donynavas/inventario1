<html>
<head>
        <title>Validate</title>
</head>
</html>
<?php

include "conn.php";

$username=$_POST['username'];
$password=$_POST['password'];
session_start();
$_SESSION['username']=$username;

$consulta="SELECT*FROM usuarios where username='$username' and password='$password'";
$resultado=mysqli_query($mysqli,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:main.php");

}else
if($filas['id_cargo']==2){ //usuarios
header("location:users.php");
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

