
<?php 

session_start();


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
    $varMail = $_SESSION['mail'] = $email;
    $varPwd = $_SESSION['pwd'] = $password;
    $stmt->execute();
    $user = $stmt->fetch();
    if($user) {

        $role = $pdo->prepare("SELECT role FROM users WHERE email = :email AND password = :password");
        $role->bindParam(':email', $varMail);
        $role->bindParam(':password', $varPwd);
        $role->execute();
        $checkRole = $role->fetch();
        // print_r($checkRole[0]);
        if($checkRole[0] == "admin"){
            echo'<p>admin</p>';
        }else{
            echo'<p>Utilisateur</p>';
        }
        
        // echo "<p>inscrit</p>";
    } else {
        echo "Désolé, vous n'êtes pas inscrit.";
    }
}else{
    echo 'email ou password est vide';
}

?>