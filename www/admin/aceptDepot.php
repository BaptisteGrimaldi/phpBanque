
<?php

    session_start();
    
    $dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root' , 'root');

    $idDepot = $_POST['depot'];
    $idDepotFinal = intval($idDepot);

    $query = "SELECT * from deposits WHERE id = $idDepotFinal";

    $req = $pdo->prepare($query);
    $req->execute();
    $checkReq = $req->fetch();

    $montantDeposit = intval($checkReq[4]);

    $idUserDepot = intval($checkReq[6]);

    $que = "UPDATE users SET bankaccounts = bankaccounts + :montantDeposit WHERE id = :idUserDepot ";

    $s = $pdo->prepare($que);
        $s->bindParam(':montantDeposit',  $montantDeposit);
        $s->bindParam(':idUserDepot',  $idUserDepot);
        $s->execute();

        $que = "DELETE FROM deposits WHERE id = :idDepotFinal ";

        $sm = $pdo->prepare($que);
            $sm->bindParam(':idDepotFinal',  $idDepotFinal);
            $sm->execute();
    

        header("Location:http://phpbanque/phpBanque/www/admin/admin.php");

    // print_r($checkReq[6]);

?>
