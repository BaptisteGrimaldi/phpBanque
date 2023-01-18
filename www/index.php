<?php

require_once __DIR__ . '/../src/init.php';
// $db
// $_SESSION

$page_title = 'Home page';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="x-icon" href="assets/images/icon.png">
        <link rel="stylesheet" href="assets/css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banque Centrale</title>
    </head>
    
    <body>
        <?php require_once __DIR__ . '/../src/templates/partials/html_head.php'; ?>
    


        <?php require_once __DIR__ . '/../src/templates/partials/footer.php'; ?>
    </body>
</html>