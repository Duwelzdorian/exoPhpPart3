<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice5</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php

        for ($walk=1; $walk <= 15; $walk++) {
            ?>
            <p><?= $walk . ' => '; ?>On y arrive presque.</p>
            <?php
            $walk++;
        }
        ?>
    </body>
</html>