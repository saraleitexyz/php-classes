<!--
Vuelve a realizar el ejercicio 207, el de las monedas (500, 200, 100, 50, 20, 10, 5, 2, 1), 
pero haciendo uso de arrays y un bucle. Almacena el resultado en un array asociativo. 
Muestra el resultado en una lista desordenada únicamente con las cantidades que tienen algún valor.

Enunciado del 207:
A partir de una cantidad de dinero, mostrar su descomposición en billetes 
(500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), para que el número de elementos sea mínimo. 
No se utilizar ninguna instrucción condicional. Por ejemplo, al introducir 139 debe mostrar:
1 billete de 100
0 billete de 50
1 billete de 20
1 billete de 10
1 billete de 5
2 moneda de 2
Tip: Puedes forzar a realizar la división entera mediante la función intdiv($dividendo, $divisor) 
o pasar un número flotante a entero puedes usar la función intval()
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p><label for="user_question">Introduce una cantidad de dinero: </label>
        <input type="text" name="amount" id="amount"></p>
        <input type="submit" value="Enviar">
    </form>

<?php
    $amount = $_GET['amount'];

    $values = [500, 200, 100, 50, 20, 10, 5, 2, 1];

    $result = [];

    foreach ($values as $value) {
        $result[$value] = intdiv($amount, $value);
        $amount = $amount % $value;
    }

    echo "<ul>";
    foreach ($result as $value => $amount) {
        if ($amount > 0) {
            if ($value >= 5) {
                echo "<li>$amount billete(s) de $value €</li>";
            } else {
                echo "<li>$amount moneda(s) de $value €</li>";
            }
        }
    }
    echo "</ul>";
?>
</body>
</html>

