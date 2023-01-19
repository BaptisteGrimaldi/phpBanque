<?php

// session_start();
// if(!isset($_SESSION['user_id'])){
//     echo "You must be logged in to perform a transaction";
//     exit();
// }
// $dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
// $pdo = new PDO($dsn, 'root', 'root');
// $pdo->beginTransaction();
// try{
//     $argent = $_POST['montant'];
//     $monaie = $_POST['monaie'];
//     $destinataire = $_POST['destinataire'];
//     $description = $_POST['description'];
//     // Vérification que les champs obligatoires ne sont pas vides
//     if (empty($argent) || empty($monaie) || empty($destinataire) || empty($description)) {
//         throw new Exception("Veuillez remplir tous les champs obligatoires.");
//     } 
//     // Préparation de la requête d'insertion
//     $stmt = $pdo->prepare("INSERT INTO transactions (montant, monaie, destinataire, description, user_id) VALUES (:argent, :monaie, :destinataire, :description, :user_id)");
//     $stmt->bindParam(':argent', $argent);
//     $stmt->bindParam(':monaie', $monaie);
//     $stmt->bindParam(':destinataire', $destinataire);
//     $stmt->bindParam(':description', $description);
//     $stmt->bindParam(':user_id', $_SESSION['user_id']);
//     // Exécution de la requête
//     if ($stmt->execute()) {
//         $pdo->commit();
//         echo "Nouvelle transaction ajoutée avec succès";
//     } else {
//         throw new Exception("Erreur lors de l'ajout de la transaction.");
//     }
// }catch(Exception $e){
//     $pdo->rollBack();
//     echo $e->getMessage();
// }

// function makeTransaction($pdo, $sender_id, $receiver_email, $amount, $description) {
//     try{
//         $pdo->beginTransaction();
//         //Retrieve the receiver's user_id from the email
//         $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :receiver_email");
//         $stmt->bindParam(':receiver_email', $receiver_email);
//         $stmt->execute();
//         $receiver_id = $stmt->fetchColumn();
//         if(!$receiver_id){
//             throw new Exception("Invalid receiver's email");
//         }
//         //Check if the sender has enough bankaccounts
//         $stmt = $pdo->prepare("SELECT bankaccounts FROM users WHERE id = :sender_id ");
//         $stmt->bindParam(':sender_id', $sender_id);
//         $stmt->execute();
//         $sender_balance = $stmt->fetchColumn();
//         if($sender_balance < $amount){
//             throw new Exception("Insufficient bankaccounts");
//         }
//         //update sender's bankaccounts
//         $new_balance = $sender_balance - $amount;
//         $stmt = $pdo->prepare("UPDATE users SET bankaccounts = :new_balance WHERE id = :sender_id");
//         $stmt->bindParam(':new_balance', $new_balance);
//         $stmt->bindParam(':sender_id', $sender_id);
//         $stmt->execute();
//         //update receiver's bankaccounts
//         $stmt = $pdo->prepare("SELECT bankaccounts FROM users WHERE id = :receiver_id ");
//         $stmt->bindParam(':receiver_id', $receiver_id);
//         $stmt->execute();
//         $receiver_balance = $stmt->fetchColumn();
//         $new_balance = $receiver_balance + $amount;
//         $stmt = $pdo->prepare("UPDATE users SET bankaccounts = :new_balance WHERE id = :receiver_id");
//         $stmt->bindParam(':new_balance', $new_balance);
//         $stmt->bindParam(':receiver_id', $receiver_id);
//         $stmt->execute();
//         //insert transaction into the transactions table
//         $stmt = $pdo->prepare("INSERT INTO transactions (sender_id, receiver_id, amount, description) VALUES (:sender_id, :receiver_id, :amount, :description)");
//         $stmt->bindParam(':sender_id', $sender_id);
//         $stmt->bindParam(':receiver_id', $receiver_id);
//         $stmt->bindParam(':amount', $amount);
//         $stmt->bindParam(':description', $description);
//         $stmt->execute();
//         $pdo->commit();
//         return "Transaction completed successfully";
//         }catch(Exception $e){
//         $pdo->rollBack();
//         return $e->getMessage();
//         }
//         }

function makeTransaction($pdo, $sender_id, $receiver_email, $amount, $description) {
    try{
        $pdo->beginTransaction();
        //Retrieve the receiver's user_id from the email
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :receiver_email");
        $stmt->bindParam(':receiver_email', $receiver_email);
        $stmt->execute();
        $receiver_id = $stmt->fetchColumn();
        if(!$receiver_id){
            throw new Exception("Invalid receiver's email");
        }
        //Check if the sender has enough bankaccounts
        $stmt = $pdo->prepare("SELECT bankaccounts FROM users WHERE id = :sender_id ");
        $stmt->bindParam(':sender_id', $sender_id);
        $stmt->execute();
        $sender_balance = $stmt->fetchColumn();
        if($sender_balance < $amount){
            throw new Exception("Insufficient bankaccounts");
        }
        //update sender's bankaccounts
        $new_balance = $sender_balance - $amount;
        $stmt = $pdo->prepare("UPDATE users SET bankaccounts = :new_balance WHERE id = :sender_id");
        $stmt->bindParam(':new_balance', $new_balance);
        $stmt->bindParam(':sender_id', $sender_id);
        $stmt->execute();
        //update receiver's bankaccounts
        $stmt = $pdo->prepare("SELECT bankaccounts FROM users WHERE id = :receiver_id ");
        $stmt->bindParam(':receiver_id', $receiver_id);
        $stmt->execute();
        $receiver_balance = $stmt->fetchColumn();
        $new_balance = $receiver_balance + $amount;
        $stmt = $pdo->prepare("UPDATE users SET bankaccounts = :new_balance WHERE id = :receiver_id");
        $stmt->bindParam(':new_balance', $new_balance);
        $stmt->bindParam(':receiver_id', $receiver_id);
        $stmt->execute();
        //insert transaction into the transactions table
        $stmt = $pdo->prepare("INSERT INTO transactions (sender_id, receiver_id, amount, description) VALUES (:sender_id, :receiver_id, :amount, :description)");
        $stmt->bindParam(':sender_id', $sender_id);
        $stmt->bindParam(':receiver_id', $receiver_id);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        //get the transaction id
        $transaction_id = $pdo->lastInsertId();
        //insert into the user_transactions table
        $stmt = $pdo->prepare("INSERT INTO user_transactions (user_id, transaction_id) VALUES (:sender_id, :transaction_id), (:receiver_id, :transaction_id)");
        $stmt->bindParam(':sender_id', $sender_id);
        $stmt->bindParam(':receiver_id', $receiver_id);
        $stmt->bindParam(':transaction_id', $transaction_id);
        $stmt->execute();
        $pdo->commit();
        return true;
        } catch(Exception $e){
        $pdo->rollback();
        return $e->getMessage();
        }
        }

?>