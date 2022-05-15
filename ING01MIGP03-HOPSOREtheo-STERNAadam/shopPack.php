
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
    <script src="https://kit.fontawesome.com/9f84230440.js"  crossorigin="anonymous"></script>    <title>Document</title>
</head>
<body>
    <?php 
        include ("phpLinkedPages/header.html");
    ?>
   <div class="main">
   <?php 
      include ("phpLinkedPages/shop-nav.html");
    ?>

    
   <section class="sales-section" id="pack-id">
       <h1 class="SHOP">SHOP</h1>
       <h2 class="shop-section-title">Packs</h2>
       <div class="pack-container">
           <div class="product">
               <img src="./images/plat.png" class="product-img">
               <div class="product-header">
                   <h2 class="product-name">Silver Pack</h2>
                   <p class="product-detail">Contain : 1 random ship & 1 random planet</p>  
                   <h3 class="product-ref">ref : PK-084</h3>
                   <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock pack" ></h3>
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
                    <h2 class="product-price">500$</h2>
                    <button class="product-cta" type="button">Add to cart</button>
                </div>
            </div>
           </div>

           <div class="product">
               <img src="./images/gold.png" class="product-img">
               <div class="product-header">
                   <h2 class="product-name">Gold Pack</h2>
                   <p class="product-detail">Contain : 5 random ship & 3 random planet</p>  
                   <h3 class="product-ref">ref : PK-354</h3>
                   <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock pack" ></h3>
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
                    <h2 class="product-price">800$</h2>
                    <button class="product-cta" type="button">Add to cart</button>
                </div>
            </div>
           </div>

           <div class="product">
               <img src="./images/diamond.png" class="product-img">
               <div class="product-header">
                   <h2 class="product-name">Platinium Pack</h2>
                   <p class="product-detail">Contain : 10 random ship & 10 random planet</p> 
                   <h3 class="product-ref">ref : PK-480</h3>
                   <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock pack" ></h3>
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
                    <h2 class="product-price">1000$</h2>
                    <button class="product-cta" type="button">Add to cart</button>
                </div>
            </div>
           </div>

           <div class="product">
                <img src="./images/master.png" class="product-img">
                <div class="product-header">
                    <h2 class="product-name">Master Pack</h2>
                    <p class="product-detail">Contain : 15 randoms ships & 10 randoms planets</p> 
                    <h3 class="product-ref">ref : PK-543</h3>
                    <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock pack" ></h3>
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
                        <h2 class="product-price">1500$</h2>
                        <button class="product-cta" type="button">Add to cart</button>
                    </div>
                </div>
           </div>

           <div class="product">
                <img src="./images/grandmaster.png" class="product-img">
                <div class="product-header">
                    <h2 class="product-name">Ultra Pack</h2>
                    <p class="product-detail">Contain : 20 random ships & 20 random planets</p> 
                    <h3 class="product-ref">ref : PK-462</h3>
                    <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock pack" ></h3>
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
                        <h2 class="product-price">2000$</h2>
                        <button class="product-cta" type="button">Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="./images/ultra.png" class="product-img">
                <div class="product-header">
                    <h2 class="product-name">Ultra Pack</h2>
                    <p class="product-detail">Contain : 50 random ships & 50 random planets</p> 
                    <h3 class="product-ref">ref : PK-765</h3>
                    <div class="stock-containner">
                        <h3 class="stock-title">Stock :&nbsp;</h3>   
                        <h3 class="stock pack" ></h3>
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
                        <h2 class="product-price">5000$</h2>
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