<!--
3 - Confeccionar un programa que permita ingresar un valor del 1 al 10 y nos 
muestre la tabla de multiplicar del mismo.
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
        $i = 0;
        $usernum = $_GET['usernum']; 
        while ($i <= 10) {
            $result = $usernum * $i;
            echo "$usernum x $i = $result";
            echo "<br>";
            $i++;
        }
    }
    
    ?>
<p>
</body>
</html>