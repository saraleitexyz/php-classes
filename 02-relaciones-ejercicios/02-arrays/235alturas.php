<!--
Mediante un array asociativo, almacena el nombre y la altura de 5 personas (nombre => altura). 
Posteriormente, recorre el array y muéstralo en una tabla HTML. Finalmente añade una última 
fila a la tabla con la altura media.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese el nombre y la altura (en centímetros) de 5 personas: </h1>
    <form action="" method="get">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<p><label for='name$i'>Nombre $i: </label>";
            echo "<input type='text' name='name$i' id='name$i' required></p>";
            echo "<p><label for='height$i'>Altura $i: </label>";
            echo "<input type='number' name='height$i' id='height$i' required></p>";
        }
        ?>
        <input type="submit" value="Calcular">

        <?php
            $peopleHeights = [];
            $totalHeight = 0;

            for ($i=1; $i <= 5; $i++) { 
                $name = $_GET["name$i"];
                $height = $_GET["height$i"];
                $peopleHeights[$name] = $height;
                $totalHeight += $height;
            }

            $averageHeight = $totalHeight / count($peopleHeights);

            echo "<h2>Tabla de alturas:</h2>";
            echo "<table border=1>";
            echo "<tr><th>Nombre</th><th>Altura (cm)</th></tr>";
            foreach ($peopleHeights as $name => $height) {
                echo "<tr><td>$name</td><td>$height</td></tr>";
            }
            echo "<tr><td>Altura media:</td><td>$averageHeight</td></tr>";
            echo "</table>";
        ?>
    </form>
</body>
</html>