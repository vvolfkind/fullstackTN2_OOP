<?php
require 'User.php';

if($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $validator = new Validator();
    $errores = $validator->validate($_POST);
    //$usuario = new User($nombre, $email, $password);

    var_dump($usuario);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nombre">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit">
    </form>
    
</body>
</html>