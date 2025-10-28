<!--
A partir del anterior, crea un programa que muestre la pregunta recibida 
y genere una respuesta de manera aleatoria entre un conjunto de respuestas 
predefinidas, almacenadas en un array: Si, no, quizás, claro que sí, por 
supuesto que no, no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
Este ejercicio se basa en el juego de la Bola 8 mágica.
-->
<?php
    if (isset($_GET['user_question'])) {
        $user_question = $_GET['user_question'];
        $answers = ["Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no", "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña"];
        $random_answer = $answers[array_rand($answers)];
        echo "Pregunta: $user_question <br />";
        echo "Respuesta: $random_answer";
    }
?>