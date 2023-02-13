<?php
session_start();
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$conect = mysqli_connect("localhost", "root", "", "libros_bd");

if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos" . mysqli_connect_error();
    exit;
}
$result = mysqli_query($conect, "SELECT * FROM user WHERE correo = '$user'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $rNombre = $row[1];
    $rUser = $row[2];
    $rPass = $row[3];
    $rAdmin = $row[6];

    $_SESSION['nombre'] = $rNombre;
    $_SESSION['user'] = $rUser;
    $_SESSION['pass'] = $rPass;
    $_SESSION['administrador'] = $rAdmin;
    if ($user == $rUser && $pass == $rPass) {
        header('Location: tienda.php');
    } else {
        echo "Usuario o contraseña incorrecta";
    }
} else {
    echo "el usuario no existe";
}
