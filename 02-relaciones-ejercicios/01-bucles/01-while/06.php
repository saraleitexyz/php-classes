<!--
6 - Desarrollar un programa que permita la carga de 10 valores por teclado y
nos muestre posteriormente la suma de los valores ingresados y su promedio.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    <form action="" method="get">
        <p><label for="usernum">Introduce un número: </label>
        <input type="text" name="usernum" id="usernum"></p>
        <input type="submit" value="Enviar">
    </form>
    ?>
<p>
    <?php
    if (isset($_GET['usernum'])) {
        $i = 1;
        $usernum = $_GET['usernum']; 
        while ($i <= $usernum) {
            echo $i;
            echo "<br>";
            $i++;
        }
    }
    
    ?>
<p>
</body>
</html>