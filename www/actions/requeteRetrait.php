<?php

    session_start();
        
    $dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root' , 'root');

    // var_dump($_SESSION);

    $montant = $_POST['montant'];
    $montantFinal = intval($montant);

    $description = $_POST['description'];

    $email = $_SESSION['mail'];
    $pwd = $_SESSION['pwd'];


    $que = "UPDATE users SET bankaccounts = bankaccounts - :montantTransactionFinal WHERE email = :email  && password= :password  ";
    $s = $pdo->prepare($que);
    $s->bindParam(':montantTransactionFinal', $montantFinal);
    $s->bindParam(':email',  $email);
    $s->bindParam(':password',  $pwd);
    $s->execute();

    echo'test';




?>