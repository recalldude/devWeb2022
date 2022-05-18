<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <script type="text/javascript" src="shop.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/shop.css">
    <link rel="stylesheet" href="./style/lightbox.css">

    <script src="https://kit.fontawesome.com/9f84230440.js"  crossorigin="anonymous"></script>    
    <title>PlanetLink | Shop</title>
</head>
<body>
    <?php
       // include("varSession.inc.php"); 
        include ("sidebar.php");
    ?>

   <div class="main">
  
    

   <section class="sales-section" id="sales-id">
       <h1 class="SHOP">SHOP</h1>
       
       <h2 class="shop-section-title"><?php echo $_GET["cat"] ?></h2>
       <div class="planet-container">
       <?php /*
        foreach($productsList as $cat => $catProducts){
            if ($cat != $_GET["cat"]){
                continue;
            }
            foreach($catProducts as $product => $info){
                product($info);
            }   
        }
   */ ?> 
    
        <?php

        // $result = $check->fetch(PDO::FETCH_ASSOC);
        function getProducts($type){
            // include 'bdd.php';
            global $db;
            $sql = "SELECT * FROM product WHERE type='".$type."'";
            $check = $db->prepare($sql);
            $check = $db->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
            $check ->execute();
            $bigarray = array();
            while ($row = $check->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
                $array = array();
                $save = "";
                for ($i = 0; $i<count($row); $i++){
                    array_push($array, $row[$i]);
                    //echo $row[$i].", ";
                    if ($i == 1){
                        $save = $row[$i];
                    }
                }
                //echo $save;
                //print_r($array);
                $bigarray[$save] = $array;
                //echo "<br>";
            }
            return $bigarray;
        };

        

        $bigarray = getProducts($_GET["cat"]);
        // print_r($bigarray);

        foreach($bigarray as $product => $info){
            product($info);
        }   
        // print_r($result);
         ?>
        
           <?php 
           function product($product){
            echo'
            
            <div class="product">
            <form action="cart_back.php?val='.$_GET["cat"].'" method="post" >
            <input type="hidden" name="hidden_name" value="'.$product[1].'">
            <input type="hidden" name="hidden_price" value="'.$product[5].'">
            <input type="hidden" name="hidden_stock" value="'.$product[4].'">
            
                <div class = "product-img">
                    <img src="./images/'.$product[0].'" class="product-img">
                </div>
               
               <div class="product-header">
                   <h2 class="product-name">'.$product[1].'</h2>
                   <p class="product-detail">'.$product[2].'</p>  
                   <h3 class="product-ref">ref :'.$product[3].'</h3> 
                ';

                if(isset($_SESSION['type']) && $_SESSION['type'] == "admin"){
                    echo'<div class="stock-containner">
                            <h3 class="stock-title">Stock: </h3>   
                            <h3 class="stock planet">'.$product[4].'</h3>
                        </div>';
                }
                   

               echo'
               </div>
               <div class="product-body">
                <label for="qty">Quantity</label>
                <div class="counter-containner">
                    <button class="decrement" type="button">-</button>
                    <input type="text" name="qty" id="1" value="0" class="input-qty">
                    <button class="increment" type="button">+</button>
                </div>
                <div class="product-info">
                    <h2 class="product-price">'.$product[5].'€</h2>
                    <button class="product-cta" type="sumbit" name="add_cart">Add to cart</button>
                </div>
            </div>
            </form>
           </div>';
           
           };?>
        
         <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") echo'<button id="stock-btn">Hide stock</button>'; ?>
   </section>
    </div>

    <?php 
      include ("phpLinkedPages/footer.html");
    ?>

    
</body>
    <script src="./script/script.js"></script>
    <script src="./script/zoom.js"></script>
</html>