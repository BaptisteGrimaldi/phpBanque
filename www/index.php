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
        <link rel="stylesheet" href="assets/css/index.css">
        <title>Banque Centrale</title>
        <link rel="shortcut icon" type="x-icon" href="assets/images/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <?php require_once __DIR__ . '/../src/templates/partials/html_header.php'; ?>

        <section class="team">
            <div class="center">
                <h2>L'Équipe</h2>
            </div>

            <div class="team-content">
                <div class="box">
                    <img src="assets/images/logo_leo.png" alt="logo_leo.png introuvable">
                    <h3>Léo VEJUX</h3>
                    <h5>Developper / Srum Master</h5>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-discord"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <div class="box">
                    <img src="assets/images/logo_nabil.png" alt="logo_nabil.png introuvable">
                    <h3>Nabil DAADAA</h3>
                    <h5>Developper</h5>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-discord"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <div class="box">
                    <img src="assets/images/logo_baptiste.png" alt="logo_baptiste.png introuvable">
                    <h3>Baptiste GRIMALDI</h3>
                    <h5>Developper</h5>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-discord"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once __DIR__ . '/../src/templates/partials/html_footer.php'; ?>
    </body>
</html>