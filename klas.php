<?php
 echo("Wie zit er in de klas ? ");
$a = explode(" ", readline(""));

    foreach ($a as $aa) {
        echo($aa .PHP_EOL);
    }
?>