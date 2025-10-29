<?php
$name = $_POST['name'];
$surname1 = $_POST['surname1'];
$surname2 = $_POST['surname2'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$phoneNumber = $_POST['phoneNumber'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Datos introducidos</title>
</head>
<body>
  <table border="1">
    <tr><td>Nombre</td><td><?= $name ?></td></tr>
    <tr><td>Apellidos</td><td><?= $surname1 . " " . $surname2 ?></td></tr>
    <tr><td>Email</td><td><?= $email ?></td></tr>
    <tr><td>Año de nacimiento</td><td><?= $birthdate ?></td></tr>
    <tr><td>Teléfono</td><td><?= $phoneNumber ?></td></tr>
  </table>
</body>
</html>
