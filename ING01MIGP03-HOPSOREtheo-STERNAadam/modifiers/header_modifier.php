<?php 
    if(isset($_SESSION['user']))
        $account = '<a href="modifiers\logout.php" class="login-cta">Logout</a>';
    else
        $account = '<a href="connect.php">Connect</a>';
    
    echo $account;

?>