<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <h1 class="p-5 text-center">Usuario correcto<?php
    session_start();
    $rAdmin = $_SESSION['administrador'];
    if ($rAdmin == "si"){
        echo "Eres administrador";
    } else {
        echo "No eres administrador";
    }
    ?></h1>
</body>
</html>