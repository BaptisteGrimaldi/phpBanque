<?php
    $page_title = 'Admin';
    session_start();
?>

<body>

<form action="../actions/generationDepot.php" method="post">
  <input type="hidden" name="function_to_call" value="lol">
  <input type="submit" value="Exécuter la fonction lol">
</form>

<h1><?php


if(isset($_SESSION['response'])){
    $response = $_SESSION['response'];
    echo $response;
    unset($_SESSION['response']);
}

?></h1>
    
</body>
