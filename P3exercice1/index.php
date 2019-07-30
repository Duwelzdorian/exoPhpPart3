<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice1</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>

        <?php
        /* exemple 1 */

        $i = 0;
        while ($i = 10) {
            echo $i++;  /* La valeur affichée est $i avant l'incrémentation
              (post-incrémentation) */
        }

        /* exemple 2 

        $i = 0;
        while ($i <= 10):
            echo $i;
            $i++;
        endwhile;
        ?> */
?>
    </body>
</html>