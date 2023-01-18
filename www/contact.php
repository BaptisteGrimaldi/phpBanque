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
        <link rel="stylesheet" href="assets/css/contact.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banque Centrale</title>
    </head>
    <body>
        <?php require_once __DIR__ . '/../src/templates/partials/html_header.php'; ?>
        
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <?= show_error(); ?>
                <form action="./actions/send_contact.php" method="post">
                    <div class="right">
                        <h2>Nous Contacter</h2>
                        <input type="text" class="field" placeholder="Nom">
                        <input type="text" class="field" placeholder="Email">
                        <input type="text" class="field" placeholder="Téléphone">
                        <textarea class="field area" placeholder="Message"></textarea>
                        <button class="btn">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
        
        
        
                    
        
        
        
        
        
        
        
        
        
        
        
        
        <!--<div>
            <h1>Contact</h1>

            
        

            <?= show_error(); ?>

            <form action="/actions/form_contact.php" method="post">
                <div>
                    <label for="fullname">Votre nom complet</label>
                    <input type="text" id="fullname" name="fullname">
                </div>
                <div>
                    <label for="phone">Numero de Telephone</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label for="message">Votre message</label>
                    <textarea name="message" id="textarea" cols="30" rows="10"></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>-->

        <?php require_once __DIR__ . '/../src/templates/partials/html_footer.php'; ?>
    </body>
</html>