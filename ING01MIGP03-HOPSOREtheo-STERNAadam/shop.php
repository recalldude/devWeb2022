<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/shop.css">

    <script src="https://kit.fontawesome.com/9f84230440.js"  crossorigin="anonymous"></script>    
    <title>PlanetLink | Shop</title>
</head>
<body>
    <?php
        include("varSession.inc.php");
        include ("phpLinkedPages/header.php");
    ?>

   <div class="main">
   <?php 
      include ("./phpLinkedPages/shop-nav.php");
    ?>
    

   <section class="sales-section" id="sales-id">
       <h1 class="SHOP">SHOP</h1>
       <h2 class="shop-section-title"><?php echo $_GET["cat"] ?></h2>
       <div class="planet-container">
       <?php 
        foreach($productsList as $cat => $catProducts){
            if ($cat != $_GET["cat"]){
                continue;
            }
            foreach($catProducts as $product => $info){
                product($info);
            }   
        }
    ?>
           <?php 
           function product($product){
            $echo= '<div class="product">
               <img src="./images/'.$product[0].'" class="product-img">
               <div class="product-header">
                   <h2 class="product-name">'.$product[1].'</h2>
                   <p class="product-detail">'.$product[2].'</p>  
                   <h3 class="product-ref">ref :'.$product[3].'</h3> 
                   <div class="stock-containner">
                        <h3 class="stock-title">Stock </h3>   
                        <h3 class="stock planet" >: '.$product[4].'</h3>
                    </div>   
               </div>
               <div class="product-body">
                <label for="qty">Quantity</label>
                <div class="counter-containner">
                    <button class="decrement">-</button>
                    <input type="text" name="qty" id="1" value="0" class="input-qty">
                    <button class="increment">+</button>
                </div>
                <div class="product-info">
                    <h2 class="product-price">'.$product[5].'€</h2>
                    <button class="product-cta" type="button">Add to cart</button>
                </div>
            </div>
           </div>';
           echo $echo; 
           }?>
       <button id="stock-btn">Hide stock</button>
   </section>
    </div>

    <?php 
      include ("phpLinkedPages/footer.html");
    ?>

    <script src="./script/script.js"></script>
    <script src="./script/zoom.js"></script>
</body>
</html>