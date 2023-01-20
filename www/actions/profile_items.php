<?php

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

                $_SESSION['role'] = $checkRole[0];

                header('Location:../profile_admin.php');
            }else{
                $_SESSION['role'] = $checkRole[0];
                header('Location:../profile.php');
            }
            
            // echo "<p>inscrit</p>";
        } else {
            echo "Désolé, vous n'êtes pas inscrit.";
            header('Location:../connexion.php');
        }
    } else {
        echo 'email ou password est vide';
    }
?>