<?php

require_once __DIR__ . '/index.php';
require_once __DIR__ . '/partials/functions.php';

?>

<div class="container py-2">
    
    <?php if(isset($_GET['number']) && $numCharacters > 0){ ?>
        <h2>Ecco a te la tua password:</h2>
        <p><?php generateCasualPassword($numCharacters) ?></p>
    <?php }else{ ?>
        <p class="text-danger">Inserire un numero</p>
    <?php }?>

</div>