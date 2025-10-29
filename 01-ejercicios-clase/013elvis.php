/* 
Si queremos comprobar si una variable tiene valor y si no darle un valor 
determinado, usaremos el operador ?: (se conoce como el operador Elvis - 
https://en.wikipedia.org/wiki/Elvis_operator) con la sintáxis expresión ?: 
valorSiVacio:
*/
<?php
$nombre = $_GET['nombre'] ?: desconocido;
?>