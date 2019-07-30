<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice2</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $number1 = 0;
        $number2 = rand(1, 100);
        while ($number1 < 20) {
            echo $number1 * $number2 . '.';
            $number1++;
        }
        ?>
    </body>
</html>