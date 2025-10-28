<!--
A partir del ejercicio 230, genera un array aleatorio de 33 elementos con números comprendidos 
entre el 0 y 100 y calcula:
El mayor
El menor
La media
-->
<?php
    $numeros = [];

    for ($i = 0; $i < 33; $i++) {
        $numeros[] = rand(0, 100);
    }

    $biggest_number = max($numeros);
    $smallest_number = min($numeros);
    $average = array_sum($numeros) / count($numeros);

    echo "Número mayor: $biggest_number<br/>";
    echo "Número menor: $smallest_number<br/>";
    echo "Media: $average";

?>