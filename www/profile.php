<?php

require_once __DIR__ . '/../src/init.php';
// $db
// $_SESSION

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="assets/css/profile.css">
        <title>Banque Centrale</title>
        <link rel="shortcut icon" type="x-icon" href="assets/images/icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <!--<?php require_once __DIR__ . '/../src/templates/partials/html_header.php'; ?>-->
    
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-user"></i>
                            <div class="title">Mon Profil</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-wrench"></i>
                            <div class="title">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="profile_transactions.php">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                            <div class="title">Transactions</div>
                        </a>
                    </li>
                    <li>
                        <a href="profile_deposits.php">
                            <i class="fa-solid fa-piggy-bank"></i>
                            <div class="title">Dépots</div>
                        </a>
                    </li>
                    <li>
                        <a href="profile_withdrawals.php">
                            <i class="fa-solid fa-piggy-bank"></i>
                            <div class="title">Retraits</div>
                        </a>
                    </li>
                    <li>
                        <a href="profile_contact.php">
                            <i class="fa-solid fa-address-book"></i>
                            <div class="title">Contact</div>
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                        <i class="fa-solid fa-backward-step"></i>
                            <div class="title">Retour au site</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="top-bar">
                    <div class="search">
                        <input type="text" name="search" placeholder="Rechercher...">
                        <label for="search"><i class="fas fa-search"></i></label>
                    </div>
                    <i class="fas fa-bell"></i>
                    <div class="user">
                        <img src="assets/images/icon_user_default.png" alt="">
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                            <div class="number">52496</div>
                            <div class="card-name">Montant</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">7</div>
                            <div class="card-name">Transactions effectués</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">4</div>
                            <div class="card-name">Dépots effectués</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-piggy-bank"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">3</div>
                            <div class="card-name">Retraits effectués</div>
                        </div>
                        <div class="icon-box">
                        <i class="fa-solid fa-piggy-bank"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">3</div>
                            <div class="card-name">Messages effectués</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-address-book"></i>
                        </div>
                    </div>
                </div>
                <div class="tables">
                    <div class="last-appointments">
                        <div class="heading">
                            <h2>Transactions</h2>
                            <a href="profile_transactions.php" class="btn">Tout voir</a>
                        </div>
                        <table class="appointments">
                            <thead>
                                <td>ID</td>
                                <td>ID_User</td>
                                <td>Role</td>
                                <td>Montant</td>
                                <td>Devise</td>
                                <td>Date</td>
                                <td>Description</td>
                                <td>Status</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                                <tr>
                                <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-check"></i>
                                    </td>
                                </tr>
                                <tr>
                                <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="last-appointments">
                        <div class="heading">
                            <h2>Contact</h2>
                            <a href="profile_contact.php" class="btn">Tout voir</a>
                        </div>
                        <table class="visiting">
                            <thead>
                                <td>Nom</td>
                                <td>Email</td>
                                <td>Téléphone</td>
                                <td>Message</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Léo</td>
                                    <td>lv@gmail.com</td>
                                    <td>0606060606</td>
                                    <td>merci de me donner la moulaga ^^</td>
                                </tr>
                                <tr>
                                    <td>Nabil</td>
                                    <td>lv@gmail.com</td>
                                    <td>0606060606</td>
                                    <td>merci de me donner la moulaga ^^</td>
                                </tr>
                                <tr>
                                    <td>Baptiste</td>
                                    <td>lv@gmail.com</td>
                                    <td>0606060606</td>
                                    <td>merci de me donner la moulaga ^^</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="last-appointments">
                        <div class="heading">
                            <h2>Dépots</h2>
                            <a href="profile_deposits.php" class="btn">Tout voir</a>
                        </div>
                        <table class="appointments">
                            <thead>
                                <td>ID</td>
                                <td>ID_User</td>
                                <td>Role</td>
                                <td>Montant</td>
                                <td>Devise</td>
                                <td>Date</td>
                                <td>Description</td>
                                <td>Status</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-check"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div></div>
                    <div class="last-appointments">
                        <div class="heading">
                            <h2>Retraits</h2>
                            <a href="profile_withdrawals.php" class="btn">Tout voir</a>
                        </div>
                        <table class="appointments">
                            <thead>
                                <td>ID</td>
                                <td>ID_User</td>
                                <td>Role</td>
                                <td>Montant</td>
                                <td>Devise</td>
                                <td>Date</td>
                                <td>Description</td>
                                <td>Status</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-check"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>non vérifié</td>
                                    <td>250</td>
                                    <td>euros</td>
                                    <td>19/01/2023 - 22:24</td>
                                    <td>Je souhaite déposer mon argent merci</td>
                                    <td>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--<?php require_once __DIR__ . '/../src/templates/partials/html_footer.php'; ?>-->
    </body>
</html>