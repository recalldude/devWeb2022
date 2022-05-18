<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/connect.css">
    <link rel="stylesheet" href="./style/style.css">
    
    <title>PlanetLink</title>
</head>

<body>

  <?php 
  include ("./phpLinkedPages/sidebar.php");
?>

  
<div class="form-containner">
            <form action="connect_back.php" method="post">
                <h1 class="title">Connect</h1>
                <div class="content-containner">
                    <div class="input-containner">
                        <input type="text" name="username"  placeholder="Username">
                    </div>
                    <div class="input-containner">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <?php include('./controllers/connect_controller.php'); ?>
                <p>If you dont have an account you can register <a href="signup.php">here</a></p>
                
                <div class="action">
                    <button type="submit">Sign in</button>
                </div>
            </form>
        </div>

</body>