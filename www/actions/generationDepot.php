<?php

function lol(){

    // session_start();
    // $response = 'test';
    // $_SESSION['response'] = $response;
    header('Location:http://banquephp/phpBanque/www/admin/admin.php');
}

if(isset($_POST['function_to_call'])) {
    switch($_POST['function_to_call']) {
        case 'lol':
            lol();
            break;
    }
}

// header('Location:http://banquephp/phpBanque/www/admin/admin.php');
?>