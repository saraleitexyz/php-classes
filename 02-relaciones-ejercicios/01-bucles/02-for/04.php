<!--
Se realiza la carga de 10 valores enteros por teclado. Se desea conocer:
a) La cantidad de valores ingresados negativos.
b) La cantidad de valores ingresados positivos.
c) La cantidad de múltiplos de 15.
d) El valor acumulado de los números ingresados que son pares.
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
        $valores_negativos = 0;
        $valores_positivos = 0;
        $multiplos_15 = 0;
        $suma_pares = 0;


        for ($i = 1; $i <= 10; $i++) {
            $num = $_GET["num$i"];
            if ($num < 0) {
                $valores_negativos += 1;
            } else {
                $valores_positivos += 1;

                if ($num % 15 == 0) {
                    $multiplos_15 += 1;
                } else if ($num % 2 == 0) {
                    $suma_pares += $num;
                }
                
            }
            
        }

        echo "<h2>Resultados:</h2>";
        echo "a) Hay $valores_negativos valores negativos. <br>";
        echo "b) Hay $valores_positivos valores positivos. <br>";
        echo "c) Hay $multiplos_15 múltiplos de 15. <br>";
        echo "d) El valor acumulado de los valores positivos pares es $suma_pares. <br>";
    }
    ?>
</body>
</html>
