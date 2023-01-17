<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $page_title; ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
        <div class="menu_bar">
            <h1 class="logo">Banque<span>Centrale</span></h1>
    
            <ul>
                <li><a href="index.php">Accueil</a></li>     
                <li><a href="my_space.php">Mon Espace<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="#">Bank Accounts</a></li>
                            <li><a href="#">Currencies</a></li>
                            <li><a href="#">Transaction</a></li>
                            <li><a href="#">Deposits</a></li>
                            <li><a href="#">Withdrawals</a></li>
                            <li>
                        </ul>
                    </div>
                </li>
                <li><a href="contact.php">Contact Us</a></li>   
                <li><a href="profile.php"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </div>
    </body>
</html>