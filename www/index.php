<?php

require_once __DIR__ . '/../src/init.php';
// $db
// $_SESSION

$page_title = 'Home page';
require_once __DIR__ . '/../src/templates/partials/html_head.php';

?>
<body>



<div id="navBar">
    <p>Boursarama Banque</p>
    <p>Connection</p>
    <p> <a href="inscriptionUser.php">Inscription</a></p>
</div>

<?php require_once __DIR__ . '/../src/templates/partials/footer.php'; ?>
</body>
</html>