<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/sidebar.css">
    <link rel="stylesheet" href="./style/cart.css">
    <title>Document</title>
</head>
<body>
    <?php include('./phpLinkedPages/sidebar.php') ?>
    <h2>Cart</h2>
    <div class="table">
        <table>
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <?php if(!empty($_SESSION['cart'])){
                $total = 0;
                foreach($_SESSION['cart'] as $key => $values){
                    ?>
                    <tr>
                        <td><?php echo $values["name"]; ?> <br><small><a href="cart_back.php?action=delete&name=<?php echo $values["name"]?>">Remove</a></small> </td>
                        <td><?php echo $values["qty"]; ?></td>
                        <td><?php echo $values["price"]; ?></td>
                        <td><?php echo number_format($values['qty'] * $values['price'], 2); ?></td>

                    </tr>
                <?php
                    $total = $total + $values['qty'] * $values['price'];
                }
            } 
            ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right"><?php echo number_format($total, 2); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>