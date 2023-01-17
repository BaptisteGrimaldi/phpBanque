
<?php
$dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
$pdo = new PDO($dsn, 'root' , 'root');

if(!empty($_POST['inMail']) && !empty($_POST['inPass'])) {
    // Récupération des données du formulaire
    $email = $_POST['inMail'];
    $password = $_POST['inPass'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // Préparation de la requête
        $query = "INSERT INTO users (email, password, role, created_at, last_ip) VALUES (:email, :password, :role, NOW(), :last_ip)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindValue(':role', 5, PDO::PARAM_INT);
        $last_ip = $_SERVER['REMOTE_ADDR'];
        if (!filter_var($last_ip, FILTER_VALIDATE_IP)) {
        $last_ip = "0.0.0.0";
        }
        $stmt->bindParam(':last_ip', $last_ip);
        $stmt->execute();
    }else{
        echo 'email n\'est pas valide';
    }
}else{
    echo 'email ou password est vide';
}

header('Location: http://phpbanque/phpBanque/www/inscriptionUser.php');


?>

