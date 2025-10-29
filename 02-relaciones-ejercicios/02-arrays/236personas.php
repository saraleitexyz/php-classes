<!--
 Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. 
 Para ello, crea un array de personas, siendo cada persona un array asociativo: 
 [ ['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],[…],… ] Posteriormente, 
 recorre el array y muéstralo en una tabla HTML.
-->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese el nombre, la altura (en centímetros) y el email de 5 personas: </h1>
    <form action="" method="get">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<p><label for='name$i'>Nombre $i: </label>";
            echo "<input type='text' name='name$i' id='name$i' required></p>";
            echo "<p><label for='height$i'>Altura $i: </label>";
            echo "<input type='number' name='height$i' id='height$i' required></p>";
            echo "<p><label for='email$i'>Email $i: </label>";
            echo "<input type='email' name='email$i' id='email$i' required></p>";
        }
        ?>
        <input type="submit" value="Mostrar en tabla">

        <?php
            $people = [];

            for ($i=1; $i <= 5; $i++) {
                $people[] = [
                    'name' => $_GET["name$i"],
                    'height' => $_GET["height$i"],
                    'email' => $_GET["email$i"]
                ];
            }

            echo "<h2>Tabla de alturas:</h2>";
            echo "<table border=1>";
            echo "<tr><th>Nombre</th><th>Altura (cm)</th><th>Email</th></tr>";
            foreach ($people as $person) {
                echo "<tr>
                    <td>{$person['name']}</td>
                    <td>{$person['height']}</td>
                    <td>{$person['email']}</td>
                    </tr>";
            }
            echo "</table>";
        ?>
    </form>
</body>
</html>