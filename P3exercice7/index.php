<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice7</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $walk = 1;
        for ($walk = 1; $walk <= 100; $walk+=15) {
            ?>
            <p><?= $walk . ' => '; ?>On tient le bon bout.</p>
            <?php
         
        }
        ?>
    </body>
</html>