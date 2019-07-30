<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice4</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $number = 1;

        while ($number < 10) {
            echo $number . '.';
            $number += $number / 2; // pour incrémener de la moitié de sa valeur.
        }
        ?>
    </body>
</html>