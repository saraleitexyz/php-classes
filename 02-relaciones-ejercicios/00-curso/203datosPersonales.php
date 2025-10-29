<!--
Escribe un programa que almacene en variables tu nombre, 
primer apellido, segundo apellido, email, año de nacimiento 
y teléfono. Luego muéstralos por pantalla dentro de una tabla.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
</head>
<body>
    <?php
        $name = "Bruce";
        $surname1 = "Wayne";
        $surname2 = "Enterprise";
        $email = "batman@dccomics.com";
        $birthdate = "1939";
        $phoneNumber = "666123456";
    ?>
    <table border="1">
    <tr><td>Nombre</td><td><?= $name ?></td></tr>
    <tr><td>Apellidos</td><td><?= $surname1 . " " . $surname2 ?></td></tr>
    <tr><td>Email</td><td><?= $email ?></td></tr>
    <tr><td>Año de nacimiento</td><td><?= $birthdate ?></td></tr>
    <tr><td>Teléfono</td><td><?= $phoneNumber ?></td></tr>
  </table>
</body>
</html>
Escribe un programa que almacene en variables tu nombre, 
primer apellido, segundo apellido, email, año de nacimiento 
y teléfono. Luego muéstralos por pantalla dentro de una tabla.
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
</head>
<body>
    <?php
        $name = "Bruce";
        $surname1 = "Wayne";
        $surname2 = "Enterprise";
        $email = "batman@dccomics.com";
        $birthdate = "1939";
        $phoneNumber = "666123456";
    ?>
    <table border="1">
    <tr><td>Nombre</td><td><?= $name ?></td></tr>
    <tr><td>Apellidos</td><td><?= $surname1 . " " . $surname2 ?></td></tr>
    <tr><td>Email</td><td><?= $email ?></td></tr>
    <tr><td>Año de nacimiento</td><td><?= $birthdate ?></td></tr>
    <tr><td>Teléfono</td><td><?= $phoneNumber ?></td></tr>
  </table>
</body>
</html>