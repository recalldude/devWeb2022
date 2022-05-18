<?php
session_start();
    if(isset($_POST['add_cart'])){
        if(isset($_SESSION['cart'])){
            $name_array = array_column($_SESSION['cart'], 'name');
            if(!in_array($_POST['hidden_name'], $name_array)){
                $count = count($_SESSION['cart']);
                $item = array(
                    'name' => htmlspecialchars($_POST['hidden_name']),
                    'price' => htmlspecialchars($_POST['hidden_price']),
                    'qty' => htmlspecialchars($_POST['qty'])
                    );
                $_SESSION['cart'][$count] = $item;
            } else {
                foreach($_SESSION['cart'] as $key => &$values){
                    if($values['name'] == $_POST['hidden_name']){
                        $values['qty'] += $_POST['qty'];
                    }
                }
            }
        } else{
            $item = array(
            'name' => htmlspecialchars($_POST['hidden_name']),
            'price' => htmlspecialchars($_POST['hidden_price']),
            'qty' => htmlspecialchars($_POST['qty'])
            );
            $_SESSION['cart'][0] = $item;
        }
        $cat = $_GET['val'];
        header('Location: shop.php?cat='.$cat.'');
    } elseif(isset($_GET['action'])){
        if($_GET['action'] == 'delete')
        foreach($_SESSION['cart'] as $key => $values){
            if($_GET['name'] == $values['name'])
                unset($_SESSION['cart'][$key]);
        }
        header('Location: cart.php');
    }
    

    