<?php

    session_start();

    $dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root', 'root');

    $password = $_SESSION['pwd'];
    $mail = $_SESSION['mail'];

    $req = "SELECT `id` FROM `users` WHERE email = '$mail' AND password = '$password'";

    $reqId = $pdo->prepare($req);
    $reqId->execute();
    $getId = $reqId->fetch();

    $_SESSION['id'] = $getId[0];

    if(isset($_POST['montant'], $_POST['monnaie'], $_POST['description'])){
        $montant = $_POST['montant'];
        $monnaie = $_POST['monnaie'];
        $description = $_POST['description'];
        $id_user = $_SESSION['id'];
        $role = $_SESSION['role'];

        $montantFinal = intval($montant);

        
        // préparation de la requête
        $stmt = $pdo->prepare("INSERT INTO deposits (role, date_depos, monnaie, montant, description_depot, id_user) 
                                VALUES (:role, NOW(), :monnaie, :montant, :description_depot, :id_user)");
        // liaison des paramètres
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':monnaie', $monnaie);
        $stmt->bindParam(':montant', $montantFinal);
        $stmt->bindParam(':description_depot', $description);
        $stmt->bindParam(':id_user', $id_user);
        // exécution de la requête
        if($stmt->execute()){
            // enregistrement réussi
            echo "Le dépôt a été effectué avec succès.";
        }else{
            // enregistrement échoué
            echo "Une erreur est survenue lors de l'enregistrement du dépôt.";
            
        }
    }else{
        // les données du formulaire ne sont pas complètes
        echo "Veuillez remplir tous les champs du formulaire.";
    }
?>