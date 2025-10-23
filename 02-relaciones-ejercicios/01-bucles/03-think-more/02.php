<!--
2 – Realizar un programa que lea las notas de 10 alumnos y nos muestre la 
mejor nota y la peor nota.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese 10 notas de alumnos: </h1>
    <form action="" method="get">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<p><label for='num$i'>Nota $i: </label>";
            echo "<input type='number' name='num$i' id='num$i' required></p>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
    if (isset($_GET['num1'])) {
        $nota_alta = 0;
        $nota_baja = 10;

        for ($i = 1; $i <= 10; $i++) {
            $num = $_GET["num$i"];
            if ($num > $nota_alta) {
                $nota_alta = $num;
            } else if ($num < $nota_baja) {
                $nota_baja = $num;
            }
        }

        echo "<h2>Resultados:</h2>";
        echo "La nota más alta es $nota_alta. <br>";
        echo "La nota más baja es $nota_baja. <br>";
    }
    ?>
</body>
</html>