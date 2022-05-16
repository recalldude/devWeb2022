<?php
    session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $Json = file_get_contents("users.json");
        $connectArray = json_decode($Json, true);

        $flag = false;

        foreach($connectArray["data"] as $user ){
            if($user['pseudo'] == $_POST['username']){
                $flag = true;
                $password = hash('sha256', $password);
                if($password == $user["password"]){
                    $_SESSION["user"] = $username;
                    header('Location:index.php');
                }else header('Location:connect.php?login_err=password');
            }
        }
        if(!$flag)
        header('Location:connect.php?login_err=all');
    }else header('Location:connect.php');