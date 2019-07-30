<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice6</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        
        for ($walk= 20; $walk>= 0; $walk--) {
            ?>
            <p><?= $walk . ' => '; ?>C'est presque bon.</p>
            <?php
         
        }
        ?>
    </body>
</html>