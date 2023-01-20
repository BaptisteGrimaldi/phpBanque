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
        <link rel="stylesheet" href="assets/css/withdrawals.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banque Centrale</title>
    </head>
    <body>
        <?php require_once __DIR__ . '/../src/templates/partials/html_header.php'; ?>
        
        <div class="container">
            <div class="contact-box">
                <?= show_error(); ?>
                <form action = "actions/requeteRetrait.php" method="post">
                    <div class="right">
                        <h2>Retrait</h2>
                        <input type="text" for="argent" name="montant" class="field" placeholder="Montant">
                        <input list="ma_liste_options" id="ma_liste" name="monnaie" class="field" placeholder="Devise">
                            <datalist id="ma_liste_options">
                                <option value="Euro">Euro</option>
                                <option value="Dollard">Dollard</option>
                                <option value="Bitcoin">Bitcoin</option>
                            </datalist>
                        <input type="text" for="description" name="description"" class="field" placeholder="Message">
                        <div class="ecartor">
                            <button class="btn">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <?php require_once __DIR__ . '/../src/templates/partials/html_footer.php'; ?>
    </body>
</html>