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
    <title>PlanetLink</title>
</head>
<body>
    <?php 
        include("varSession.inc.php");
        include ("sidebar.html");
    ?>

    
   

    <section class="hero">
        <div class="container">
            <div  class="left-col">
                <p>An easy way to buy your planet</p>
                <h1>Buy your new planet</h1>
                <div class="hero-cta">
                    <a href="shop.php?cat=Planet" class="primary-cta">Buy </a>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="watch-video-cta"><img src="./images/watch.svg" alt="Watch a video">Watch the presentation</a>
                </div>
            </div>
            <img src="./images/lowPoly 1.png" alt="A big Image" class="hero-img">
        </div>
        <div class="logocycontainer">
          <div  class="left-col">
            <p>Trusted by :</p>
          </div>
          <img src="./images/cyTech.png" alt="CyTech Logo" class="cytech-img">
        </div>
    </section>
    </div>
   <section class="features-section">
        <div class="container">
            <ul class="features-list">
                <li>Secure payment</li>
                <li>Instant delivery</li>
                <li>Integrated wallet</li>
                <li>24/7 after-sales service</li>
                <li>Certified lover boy®</li>
            </ul>
        </div>
    </section> 

    <?php 
      include ("phpLinkedPages/footer.html");
    ?>
    
</body>


<script src="./script.js"></script>
  
</html>