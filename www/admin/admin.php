<?php
    $page_title = 'Admin';
    session_start();
?>

<body>

<form action="../actions/generationDepot.php" method="post">
  <input type="hidden" name="function_to_call" value="lol">
  <input type="submit" value="Actualiser">
</form>

<h1><?php


if(isset($_SESSION['response'])){
    $response = $_SESSION['response'];
    echo $response;
    unset($_SESSION['response']);
}

?></h1>

<div>
    
    <?php
    $dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root', 'root');
    $query = "SELECT * FROM `deposits`";

    $reqDepot = $pdo->prepare($query);
    $reqDepot->execute();
    $getDepot = $reqDepot->fetchAll();

    $a = count($getDepot); 

        // for($i=0 ; $i<$a;$i++){

        //     print_r($getDepot[$i][0]);
        
        
        // }

    for($i=0 ; $i<$a;$i++){

        
        for($r=0;$r<7;$r++){

            if($r == 0){
                print_r('id:'." ". $getDepot[$i][$r]." ");
            }
            if($r == 1){
                print_r('role:'." ". $getDepot[$i][$r]." ");
            }
            if($r == 2){
                print_r('date_depos:'." ". $getDepot[$i][$r]." ");
            }
            if($r == 3){
                print_r('monnaie:'." ". $getDepot[$i][$r]." ");
            }
            if($r == 4){
                print_r('montant:'." ". $getDepot[$i][$r]." ");
            }
            if($r == 5){
                print_r('description_depot:'." ". $getDepot[$i][$r]." ");
            }
            if($r == 6){
                print_r('id_user:'." ". $getDepot[$i][$r]." ");
            }
              
        }
        echo'<br></br>';
        
    }



    ?>
</div>
    
</body>
