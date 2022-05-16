<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/connect.css">
    <title>PlanetLink</title>
</head>

<body>

  <?php 
  include ("sidebar.php");
?>

  
<div class="form-containner">
            <form action="signup_back.php" method="post">
                <h1 class="title">Sign Up</h1>
                <div class="content-containner">
                    <div class="input-containner">
                        <input type="text" name="username"  placeholder="Username" required="required">
                    </div>
                    <div class="input-containner">
                        <input type="text" name="email"  placeholder="Email" required="required">
                    </div>
                    <div class="input-containner">
                        <input type="password" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="input-containner">
                        <input type="password" name="password_confirm" placeholder="Confirm password" required="required">
                    </div>
                </div>
                <?php include('controllers\signup_controller.php'); ?>
                <p>If you already have a account you can connect <a href="connect.php">here</a></p>
                <div class="action">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>

</body>