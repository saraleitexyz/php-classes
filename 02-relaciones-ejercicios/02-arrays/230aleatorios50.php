<!--
230. Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, 
y luego muéstralo en una lista desordenada. Para crear un número aleatorio, 
utiliza la función rand(inicio, fin). Por ejemplo:
$num = rand(0, 99)
-->
<?php
    $numeros = [];

    for ($i = 0; $i < 50; $i++) {
        $numeros[] = rand(0, 99);
    }

    foreach ($numeros as $numero) {
        echo "$numero <br />";
    }
?>