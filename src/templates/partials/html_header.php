<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/assets/css/header.css">
    </head>
    <header>
        <div class="menu_bar">
            <h1 class="logo">Banque<span>Centrale</span></h1>
    
            <ul>
                <li><a href="index.php">Accueil</a></li>     
                <li><a href="#">Mon Espace<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="bankaccounts.php">Comptes Bancaires</a></li>
                            <li><a href="currencies.php">Devises</a></li>
                            <li><a href="transaction.php">Transaction</a></li>
                            <li><a href="deposits.php">Dépôt</a></li>
                            <li><a href="withdrawals.php">Retrait</a></li>
                            <li>
                        </ul>
                    </div>
                </li>
                <li><a href="contact.php">Nous Contacter</a></li>
                <li><a onclick="profile_items.php"><i class="fa-solid fa-user"></i></a></li>
                <li><a onclick="logout.php" href="connexion.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </div>
    </header>
</html>