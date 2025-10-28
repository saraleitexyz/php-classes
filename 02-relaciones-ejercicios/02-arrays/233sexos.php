<!-- Rellena un array de 100 elementos de manera aleatoria con valores M o F 
 (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, vuelve a recorrerlo 
 y calcula cuantos elementos hay de cada uno de los valores almacenando el 
 resultado en un array asociativo ['M' => 44, 'F' => 66] (no utilices variables 
 para contar las M o las F). Finalmente, muestra el resultado por pantalla -->

 <?php
    $sex = [];

    for ($i = 0; $i < 100; $i++) {
        $sex[] = rand(0, 1) ? "M": "F";
    }

    // Array asociativo:
    $counts = ['M' => 0, 'F' => 0];

    foreach ($sex as $value) {
        $counts[$value]++;
    }

    echo "Conteo:<br/>";
    echo "M: " . $counts['M'] . "<br/>";
    echo "F: " . $counts['F'] . "<br/>";
?>