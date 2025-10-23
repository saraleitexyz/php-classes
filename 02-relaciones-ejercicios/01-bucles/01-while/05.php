<!--
5. Codificar un programa que solicite la carga de un valor positivo y nos
muestre desde 1 hasta el valor ingresado de uno en uno.
Ejemplo: Si ingresamos 30 se debe mostrar en pantalla los números del 1 al
30.

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
        <p><label for="usernum">Introduce un número: </label>
        <input type="number" name="usernum" id="usernum"></p>
        <input type="submit" value="Enviar">
    </form>
<p>
    <?php
        $i = 1;
        $usernum = $_GET['usernum'];

        while ($i <= $usernum) {
            echo $i;
            echo "<br>";
            $i++;
        }
    ?>
<p>
</body>
</html>