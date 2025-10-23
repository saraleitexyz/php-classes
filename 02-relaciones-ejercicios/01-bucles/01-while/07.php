<!--
7 - Escribir un programa que solicite ingresar 10 notas de alumnos y nos
informe cuántos tienen notas mayores o iguales a 7 y cuántos menores
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
            $notas_altas = 0;

            for ($i = 1; $i <= 10; $i++) {
                if ($_GET["num$i"] >= 7)
                    $notas_altas += 1;
            }

            $notas_bajas = 10 - $notas_altas;

            echo "<h2>Resultados:</h2>";
            echo "Hay $notas_altas alumnos con notas mayores o iguales a 7. <br>";
            echo "Hay $notas_bajas alumnos con notas menores a 7. <br>";
        }
    ?>
</body>
</html>