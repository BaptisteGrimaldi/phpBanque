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
        <link rel="stylesheet" href="assets/css/currencies.css">
        <title>Banque Centrale</title>
        <link rel="shortcut icon" type="x-icon" href="assets/images/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <?php require_once __DIR__ . '/../src/templates/partials/html_header.php'; ?>

        <section class="currencies">
            <div class="center">
                <h2>Devises</h2>
            </div>

            <div class="currencies-content">
                <img src="assets/images/image_euro.png" alt="image_euro.png introuvable">
                <img src="assets/images/money_gta.png" alt="money_gta.png introuvable">
                <img src="assets/images/image_bitcoin.png" alt="image_bitcoin.png introuvable">
            </div>
        </section>

        <?php require_once __DIR__ . '/../src/templates/partials/html_footer.php'; ?>
    </body>
</html>