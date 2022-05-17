<?php 
    if(isset($_SESSION['user'])){
        if(isset($_SESSION['cart']) ){
            $total = 0;
            foreach($_SESSION['cart'] as $key => $values){
                $total = $total + $values['qty'];
            }
            $account = '<a href="cart.php" class="login-cta"><i class="bx bx-shopping-bag" ></i> Cart '.$total.'</a>';
        }
    }else
        $account = '<a href="connect.php">Connect</a>';
    
    echo $account;

?>