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
        <link rel="stylesheet" href="assets/css/profile_admin.css">
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
                            <i class="fa-solid fa-user-secret"></i>
                            <div class="title">Administration</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-piggy-bank"></i>
                            <div class="title">Dépots</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
                            <div class="number">7</div>
                            <div class="card-name">Dépots en attente</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-piggy-bank"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">4</div>
                            <div class="card-name">Messages en attente</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-address-book"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">3</div>
                            <div class="card-name">Administrateurs</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-user-secret"></i>
                        </div>
                    </div>
                </div>
                <div class="tables">
                <div class="last-appointments">
                        <div class="heading">
                            <h2>Dépots</h2>
                            <a href="#" class="btn">Tout voir</a>
                        </div>
                        <table class="appointments">
                            <thead>
                                <td>Nom</td>
                                <td>Email</td>
                                <td>Montant</td>
                                <td>Actions</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Léo</td>
                                    <td>leo@gmail.com</td>
                                    <td>250€</td>
                                    <td>
                                        <i class="fa-solid fa-check"></i>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nabil</td>
                                    <td>nabil@gmail.com</td>
                                    <td>300$</td>
                                    <td>
                                        <i class="fa-solid fa-check"></i>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Baptiste</td>
                                    <td>baptiste@gmail.com</td>
                                    <td>84£</td>
                                    <td>
                                        <i class="fa-solid fa-check"></i>
                                        <i class="fa-solid fa-xmark"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="doctor-visiting">
                        <div class="heading">
                            <h2>Administrateurs</h2>
                            <a href="#" class="btn">Tout voir</a>
                        </div>
                        <table class="visiting">
                            <thead>
                                <td></td>
                                <td>Name</td>
                                <td>Email</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="img-box-small">
                                            <img src="assets/images/icon_user_default.png" alt="">
                                        </div>
                                    </td>
                                    <td>Edouard</td>
                                    <td>edouard@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="img-box-small">
                                            <img src="assets/images/icon_user_default.png" alt="">
                                        </div>
                                    </td>
                                    <td>Valérie</td>
                                    <td>vecale@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="img-box-small">
                                            <img src="assets/images/icon_user_default.png" alt="">
                                        </div>
                                    </td>
                                    <td>Colombe</td>
                                    <td>colombe@gmail.com</td>
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