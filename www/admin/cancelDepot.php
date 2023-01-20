<?php 


session_start();
    
$dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
$pdo = new PDO($dsn, 'root' , 'root');

$idDepot = $_POST['cancel'];
$idDepotFinal = intval($idDepot);

$que = "DELETE FROM deposits WHERE id = :idDepotFinal ";

$sm = $pdo->prepare($que);
    $sm->bindParam(':idDepotFinal',  $idDepotFinal);
    $sm->execute();
    $checkSm = $sm->fetch();
    print_r($checkSm);

    header("Location:http://phpbanque/phpBanque/www/admin/admin.php");


?>