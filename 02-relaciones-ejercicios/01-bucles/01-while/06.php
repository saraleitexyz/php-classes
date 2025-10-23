<!--
6 - Desarrollar un programa que permita la carga de 10 valores por teclado y
nos muestre posteriormente la suma de los valores ingresados y su promedio.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese 10 valores: </h1>
    <form action="" method="get">
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<p><label for='num$i'>Valor $i: </label>";
                echo "<input type='number' name='num$i' id='num$i' required></p>";
            }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        if (isset($_GET['num1'])) {
            $suma = 0;

            for ($i = 1; $i <= 10; $i++) {
                $suma += $_GET["num$i"];
            }

            $promedio = $suma / 10;

            echo "<h2>Resultados:</h2>";
            echo "La suma de los valores es: $suma. <br>";
            echo "El promedio es: $promedio.";
        }
    ?>
</body>
</html>
