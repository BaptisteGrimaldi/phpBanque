
<?php 

$dsn = 'mysql:host=localhost;dbname=phpbanque;port=3306;charset=utf8';
$pdo = new PDO($dsn, 'root' , 'root');

if(!empty($_POST['logMail']) && !empty($_POST['logPass'])) {
    // Récupération des données du formulaire
    $email = $_POST['logMail'];
    $password = $_POST['logPass'];
    // Préparation de la requête
    $query = "SELECT email, password FROM users WHERE email = :email AND password = :password";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch();
    if($user) {
        // Les données entrées correspondent à une entrée dans la table "users"
        echo "<p>inscrit</p>";
    } else {
        echo "Désolé, vous n'êtes pas inscrit.";
    }
}else{
    echo 'email ou password est vide';
}

?>