<!--
A partir de un formulario con un campo de cantidad de personas, generar un nuevo formulario 
para leer el nombre, altura y email de cantidad personas.
237gestionarPersonas.php: A partir de las personas introducidas, mostrar sus datos en una tabla, 
y posteriormente, destacar los datos del más alto y el del más bajo.
-->

<?php
    if (isset($_GET['userQuantity'])){
        $users = $_GET['userQuantity'];
        
        echo "<form method='get'>";
        /* 
        Hidden: Pasa datos al siguiente envio del formulario.
        name le da nombre al campo
        value: pasa el valor real que queremos pasar.
        */
        echo "<input type='hidden' name='userQuantity' value='$users'>";
        for ($i = 1; $i <= $users; $i++) {
            echo "<p><label for='name$i'>Nombre $i: </label>";
            echo "<input type='text' name='name$i' id='name$i' required></p>";
            echo "<p><label for='height$i'>Altura $i: </label>";
            echo "<input type='number' name='height$i' id='height$i' required></p>";
            echo "<p><label for='email$i'>Email $i: </label>";
            echo "<input type='email' name='email$i' id='email$i' required></p>";
        }
        echo '<input type="submit" value="Mostrar en tabla">';
        echo "</form>";    

        $people = [];

        for ($i=1; $i <= $users; $i++) {
            $people[] = [
                'name' => $_GET["name$i"],
                'height' => $_GET["height$i"],
                'email' => $_GET["email$i"]
            ];
        }

        echo "<h2>Tabla de alturas:</h2>";
        echo "<table border=1>";
        echo "<tr><th>Nombre</th><th>Altura (cm)</th><th>Email</th></tr>";
        foreach ($people as $person) {
            echo "<tr>
                    <td>{$person['name']}</td>
                    <td>{$person['height']}</td>
                    <td>{$person['email']}</td>
            </tr>";
        }
        echo "</table>";
    }
?>