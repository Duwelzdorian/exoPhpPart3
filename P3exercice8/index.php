<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice1</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $walk = 200;
        while ($walk >= 0) {
            ?>
            <p><?= $walk . ' => '; ?>Enfin !!!!.</p>
            <?php
            $walk -= 12;
        }
        ?>

        <?php // avec la boucle for
        for ($walk = 200; $walk >= 0; $walk -= 12) {
            echo $walk . ' => Enfin !!!!<br />';
        }
        ?> 

    </body>
</html>