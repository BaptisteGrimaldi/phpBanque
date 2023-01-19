

<?php

session_start();
$dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
$pdo = new PDO($dsn, 'root' , 'root');

if(!empty($_POST['montant']) && !empty($_POST['description']) && !empty($_POST['destinataire'])){





    $montantTransaction = $_POST['montant'];
    $description_depot = $_POST['description'];
    $montantTransactionFinal = intval($montantTransaction);
    
    $sender_id = $_SESSION["id"];
    $sender_idFinale = intval($sender_id);
    
    $receiver_id = $_POST['destinataire'];


    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :receiver_id");
    $stmt->bindParam(':receiver_id', $receiver_id);
    $stmt->execute();
    $checkreceiver_id = $stmt->fetch();
    
    if($checkreceiver_id){
        $receiver_idFinal = intval($checkreceiver_id[0]);
        $query = "INSERT INTO transactions (montantTransaction, date_depos, description_depot, sender_id, receiver_id) VALUES (:montant,  NOW(), :description, :sender_id, :receiver_id)";
        $stm = $pdo->prepare($query);
        $stm->bindParam(':montant', $montantTransactionFinal);
        $stm->bindParam(':description', $description_depot);
        $stm->bindParam(':sender_id', $sender_idFinale);
        $stm->bindParam(':receiver_id', $receiver_idFinal);
        $stm->execute();

        // echo'test';
        
        $quer = "UPDATE users SET bankaccounts = bankaccounts + :montantTransactionFinal WHERE id = :receiver_idFinal ";
        $st = $pdo->prepare($quer);
        $st->bindParam(':montantTransactionFinal', $montantTransactionFinal);
        $st->bindParam(':receiver_idFinal',  $receiver_idFinal);
        $st->execute();

        $que = "UPDATE users SET bankaccounts = bankaccounts - :montantTransactionFinal WHERE id = :sender_idFinale ";
        $s = $pdo->prepare($que);
        $s->bindParam(':montantTransactionFinal', $montantTransactionFinal);
        $s->bindParam(':sender_idFinale',  $sender_idFinale);
        $s->execute();



        
    }else{
        echo "Invalid receiver's email";
    }
    

}
else{
    echo 'certains champs sont vides';
}



?>