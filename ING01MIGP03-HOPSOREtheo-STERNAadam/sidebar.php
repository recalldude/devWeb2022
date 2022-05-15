
<head>
    
    <link rel="stylesheet" href="./style/sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <input type="checkbox" id="sidebar-burger">
    <div class="navbar">
        <div class="container">
            <label for="sidebar-burger"><i class='bx bx-menu' id="sidebar-btn"></i></label>
            <div class="logoC">
                <img src="images/Vector.svg"> 
                <a class="logo" href="index.php">Planet<span>Link</span></a>
            </div>
            <nav>
                
                <ul class="primary-nav">
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="shop.php?cat=Planet">Shop</a></li>
                    <li class="connect-cta"><div><?php include('./modifiers/header_modifier.php'); ?></div></li>
            </ul>
            </nav>
        </div>
    </div>
    <div class="sidebar">
        <div class="top">
            <a href="shop.php?cat=Planet"><i class='bx bx-planet' ></i></box-icon><span>Planet</span></a>
            <a href="shop.php?cat=Ship"><i class='bx bx-rocket'></i></box-icon><span>Spaceship</span></a>
            <a href=""><i class='bx bx-box' style='color:#ffffff'  ></i></box-icon><span>Pack</span></a>
        </div>

        <div class="bot">
            <a href=""><i class='bx bx-mail-send' ></i><span>Contact Us</span></a>
        </div>  
    </div>
</body>
