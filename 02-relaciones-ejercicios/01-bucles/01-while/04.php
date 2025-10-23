<!-- 4 - Imprimir los números del 2 al 100 pero de 2 en 2 (2,4,6,8 ....100). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 2;

    while ($i <= 100) {
        echo $i;
        echo "<br>";
        $i += 2;
    }
    ?>
</body>
</html>