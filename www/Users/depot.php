<?php

$page_title = 'Admin';
// require_once __DIR__ . '../src/templates/partials/html_head.php';

?>

<!-- C'est ce qu'est sence me renvoyer le putain de lien au dessus -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title; ?></title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<!-- ///////////////////////////////////////////////////////////////////// -->

<body>
    <form action="./actions/requeteDepot.php">
        

        <label for="argent">Montant à déposer</label>
        <input type="text" name="argent">

        <label for="ma_liste">Monnaie</label>
        <input list="ma_liste_options" id="ma_liste" name="monaie" >
        <datalist id="ma_liste_options">
            <option value="bitcoin">Bitcoin</option>
            <option value="Euro">Euro</option>
            <option value="Dollard">Dollard</option>
        </datalist>

        <label for="destinataire"> Destinataire Adresse Mail</label>
        <input type="text" name="destinataire">

        <label for="description">Message</label>
        <input type="text" name="description">

        

    </form>

</body>
</html>
