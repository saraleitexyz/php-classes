<?php
do {
    $dado =  rand(1, 6);
    echo "Tirando el dado... <br />";
    echo "Ha salido un $dado. <br />";
} while ($dado != 5);