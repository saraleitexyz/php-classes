<!--
1 – Realizar un programa que lea un número y nos diga cuantas cifras tiene el
número.
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
        <input type="text" name="usernum" id="usernum"></p>
        <input type="submit" value="Enviar">
    </form>
<p>
    <?php
    if (isset($_GET['usernum'])) {
        $i = 1;
        $cifras = 1;
        $usernum = $_GET['usernum'];
        if ($usernum < 0) {
            $usernum = -$usernum;
        } else {
            while ($usernum > 10) {
                $usernum /= 10;
                $cifras += 1;
            }
        }
        echo "El número tiene $cifras cifras.";
    }
    ?>
<p>
</body>
</html>