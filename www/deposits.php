<?php

require_once __DIR__ . '/../src/init.php';
// $db
// $_SESSION

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="x-icon" href="assets/images/icon.png">
        <link rel="stylesheet" href="assets/css/deposits.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banque Centrale</title>
    </head>
    <body>
        <?php require_once __DIR__ . '/../src/templates/partials/html_header.php'; ?>
        
        <div class="container">
            <div class="contact-box">
                <?= show_error(); ?>
                <form action = "http://banquephp/phpBanque/www/actions/requeteDepot.php" method="post">
                    <div class="right">
                        <h2>Dépots</h2>
                        <input type="text" for="argent" name="montant" class="field" placeholder="Montant">
                        <input type="password" for="conecMail" name="logMail" class="field" placeholder="Devise">
                        <div class="ecartor">
                            <button class="btn">Envoyer la demande</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <?php require_once __DIR__ . '/../src/templates/partials/html_footer.php'; ?>
    </body>
</html>