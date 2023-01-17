<?php

$page_title = 'Inscription';
require_once __DIR__ . '/../src/templates/partials/html_head.php';

?>

<body>

<form action = "./actions/requeteInscription.php" method="post">

    <div>
        <label for="email">Email</label>
        <input type="text" name = "inMail">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="text" name = "inPass">
    </div>
    <div>
        <button type="submit">Envoyer</button>
    </div>

</form>


</body>
</html>