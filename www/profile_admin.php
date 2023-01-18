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
        <link rel="stylesheet" href="assets/css/profile_admin.css">
        <title>Banque Centrale</title>
        <link rel="shortcut icon" type="x-icon" href="assets/images/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <?php require_once __DIR__ . '/../src/templates/partials/html_header.php'; ?>
    
        <div class="side-menu">
            <div class="brand-name">
                <h2>Administration</h2>
            </div>
            <ul>
                <li>Dépots</li>
                <li>Contact</li>
                <li>Administrateurs</li>
            </ul>
        </div>
        <div class="container">
            <div class="header">
                <div class="nav">
                    <div class="search">
                        <input type="text" placeholder="Recherche...">
                        <button type="submit"><img src="assets/images/search.png" alt=""></button>
                    </div>
                </div>
                <div class="user">
                    <a href="#"btn>Add New</a>
                </div>
            </div>
        </div>

        <?php require_once __DIR__ . '/../src/templates/partials/html_footer.php'; ?>
    </body>
</html>