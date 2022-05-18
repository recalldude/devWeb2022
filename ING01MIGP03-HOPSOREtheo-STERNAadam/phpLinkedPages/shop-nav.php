<?php //include('varSession.inc.php'); ?>

<div class="top">
    <ul>
        <?php
        include 'bdd/bdd.php';

        function getLogo(){
            global $db;
            $bigarray = array();
            $sql = "SELECT * FROM LogoType";
            $check = $db->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
            $check->execute();

            while ($row = $check->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
                //echo $row[0] ;
                $bigarray[$row[0]] =  "<I class='".$row[1]."'></i></box-icon>";
            }
            return $bigarray;
        }
        
        $productLogo = getLogo();
        
        foreach ($productLogo as $cat => $logo){
            echo '<a href= "shop.php?cat='.$cat.'">'.$logo.'<span>'.$cat.'</span></a>';
            } ?>
    </ul>
 </div>