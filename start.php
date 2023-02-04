<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Inventory Ver 1.0</title>
</head>
<body>
<div id="contenedor">
    <div id="centro">
        <div id="login">
            <div class="titulo">Inventario</div>
            
            <form id="formulario" method="POST " action="validar.php">
                <input type="text" name="username" id="username" placeholder="Write your User">
                <input type="text" name="password" id="password" placeholder="Write yoour Password">
                <input type="submit" title="Entrar" name="Entrar" value="Log In">
            </form>  



</body>
</html>