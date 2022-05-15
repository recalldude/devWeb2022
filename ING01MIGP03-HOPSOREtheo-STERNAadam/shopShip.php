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
    <script src="https://kit.fontawesome.com/9f84230440.js"  crossorigin="anonymous"></script>    
    <title>Document</title>
</head>
<body>
    <?php 
        include ("phpLinkedPages/header.html");
    ?>

   <div class="main">
   <?php 
      include ("./phpLinkedPages/shop-nav.html");
    ?>


   <section class="sales-section" id="ship-id">
       <h1 class="SHOP">SHOP</h1>
       <h2 class="shop-section-title">Star Ships</h2>
       <div class="starship-container">
           <div class="product">
               <img src="./images/ship1.png" class="product-img">
               <div class="product-header">
                   <h2 class="product-name">Fast Ship</h2>
                   <p class="product-detail">The fastest ship</p>  
                   <h3 class="product-ref">ref : SS-845</h3>
                   <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock starship" ></h3>
                    </div>  
               </div>
               <div class="product-body">
                <label for="qty">Quantity</label>
                <div class="counter-containner">
                    <button class="decrement">-</button>
                    <input type="text" name="qty" id="7" value="0" class="input-qty">
                    <button class="increment">+</button>
                </div>
                <div class="product-info">
                    <h2 class="product-price">99$</h2>
                    <button class="product-cta" type="button">Add to cart</button>
                </div>
            </div>
           </div>

           <div class="product">
               <img src="./images/ship2.png" class="product-img">
               <div class="product-header">
                   <h2 class="product-name">Explorer Ship</h2>
                   <p class="product-detail">Best ship to explorer unknown systems</p>  
                   <h3 class="product-ref">ref : SS-684</h3>
                   <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock starship" ></h3>
                    </div>   
               </div>
               <div class="product-body">
                <label for="qty">Quantity</label>
                <div class="counter-containner">
                    <button class="decrement">-</button>
                    <input type="text" name="qty" id="2" value="0" class="input-qty">
                    <button class="increment">+</button>
                </div>
                <div class="product-info">
                    <h2 class="product-price">199$</h2>
                    <button class="product-cta" type="button">Add to cart</button>
                </div>
            </div>
           </div>

           <div class="product">
               <img src="./images/ship3.png" class="product-img">
               <div class="product-header">
                   <h2 class="product-name">Mining Ship</h2>
                   <p class="product-detail">A ship used to exploit planets ressources</p> 
                   <h3 class="product-ref">ref : SS-640</h3>   
                   <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock starship" ></h3>
                    </div>
               </div>
               <div class="product-body">
                <label for="qty">Quantity</label>
                <div class="counter-containner">
                    <button class="decrement">-</button>
                    <input type="text" name="qty" id="3" value="0" class="input-qty">
                    <button class="increment">+</button>
                </div>
                <div class="product-info">
                    <h2 class="product-price">499$</h2>
                    <button class="product-cta" type="button">Add to cart</button>
                </div>
            </div>
           </div>

           <div class="product">
                <img src="./images/ship4.png" class="product-img">
                <div class="product-header">
                    <h2 class="product-name">Attack Ship</h2>
                    <p class="product-detail">The warlord of space</p> 
                    <h3 class="product-ref">ref : SS-274</h3>
                    <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock starship" ></h3>
                    </div>   
                </div>
                <div class="product-body">
                    <label for="qty">Quantity</label>
                    <div class="counter-containner">
                        <button class="decrement">-</button>
                        <input type="text" name="qty" id="4" value="0" class="input-qty">
                        <button class="increment">+</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-price">899$</h2>
                        <button class="product-cta" type="button">Add to cart</button>
                    </div>
                </div>
           </div>

           <div class="product">
                <img src="./images/ship5.png" class="product-img">
                <div class="product-header">
                    <h2 class="product-name">Cruiser ship</h2>
                    <p class="product-detail">Best one to travel on long distance</p> 
                    <h3 class="product-ref">ref : SS-078</h3>
                    <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock starship" ></h3>
                    </div>   
                </div>
                <div class="product-body">
                    <label for="qty">Quantity</label>
                    <div class="counter-containner">
                        <button class="decrement">-</button>
                        <input type="text" name="qty" id="5" value="0" class="input-qty">
                        <button class="increment">+</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-price">899$</h2>
                        <button class="product-cta" type="button">Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="./images/ship6.png" class="product-img">
                <div class="product-header">
                    <h2 class="product-name">Ultra Cool Ship</h2>
                    <p class="product-detail">For cool people </p> 
                    <h3 class="product-ref">ref : SS-540</h3>
                    <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock starship" ></h3>
                    </div>   
                </div>
                <div class="product-body">
                    <label for="qty">Quantity</label>
                    <div class="counter-containner">
                        <button class="decrement">-</button>
                        <input type="text" name="qty" id="6" value="0" class="input-qty">
                        <button class="increment">+</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-price">1999$</h2>
                        <button class="product-cta" type="button">Add to cart</button>
                    </div>
                </div>
           </div>
       </div>
       <button id="stock-btn">Hide stock</button>
   </section>
</div>

<?php 
      include ("phpLinkedPages/footer.html");
    ?>
    <script src="./script/script.js"></script>
</body>
</html>