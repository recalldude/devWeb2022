<div class="shop-nav">
    <ul>
        <?php foreach ($productsList as $cat => $list){
            echo '<li><a href= "shop.php?cat='.$cat.'">'.$cat.'</a></li>';
            } ?>
    </ul>
 </div>