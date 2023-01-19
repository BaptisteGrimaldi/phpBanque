<?php

    session_start();

    $dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root', 'root');

    $password = "Yolo2001ù";
    $req = "SELECT `id` FROM `users` WHERE email = 'grimaldi.baptiste@gmail.com' AND password = '$password'";

    $reqId = $pdo->prepare($req);
    $reqId->execute();
    $getId = $reqId->fetch();

    $_SESSION['id'] = $getId[0];

    
    $argent = $_POST['montant'];
    $monaie = $_POST['monaie'];
    $destinataire = $_POST['destinataire'];
    $description = $_POST['description'];

    // Vérification que les champs obligatoires ne sont pas vides
    if (empty($argent) || empty($monaie) || empty($description)) {
        echo "Veuillez remplir tous les champs obligatoires.";
    } else {
        // Préparation de la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO transactions (montant, monaie, destinataire, description) VALUES (:argent, :monaie, :destinataire, :description)");
        $stmt->bindParam(':argent', $argent);
        $stmt->bindParam(':monaie', $monaie);
        $stmt->bindParam(':description', $description);

        // Exécution de la requête
        if ($stmt->execute()) {
            echo "Nouvelle transaction ajoutée avec succès";
        } else {
            echo "Erreur lors de l'ajout de la transaction.";
        }
    }
?>