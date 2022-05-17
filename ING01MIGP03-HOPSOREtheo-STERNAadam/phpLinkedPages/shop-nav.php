<?php include('varSession.inc.php'); ?>

<div class="top">
    <ul>
        <?php 
        
        foreach ($productLogo as $cat => $logo){
            echo '<a href= "shop.php?cat='.$cat.'">'.$logo.'<span>'.$cat.'</span></a>';
            } ?>
    </ul>
 </div>