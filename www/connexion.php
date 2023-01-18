<?php

$page_title = 'Home page';
require_once __DIR__ . '/../src/templates/partials/html_head.php';

?>
<body>

<form action="./actions/verifExistence.php" method="post">

    <div id="login">
    <h1>Login</h1>
    
    
    <div>
        
        <label for="conecMail">mail</label>
        <input type="text" name="logMail">
        
    </div>
    
    <div>
        <label for="conecPassword">mdp</label>
        <input type="text" name="logPass">
    </div>
    <button type="submit">Envoyer</button>
    
</div>
</form>

<?php require_once __DIR__ . '/../src/templates/partials/footer.php'; ?>
</body>
</html>