<?php 
    

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm']))
    {
        $pseudo = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_confirm = htmlspecialchars($_POST['password_confirm']);

        $Json = file_get_contents("users.json");
        $connectArray = json_decode($Json, true);

        $flag = false;

        
        foreach($connectArray["data"] as $user){
            if($user['email'] == $email)
                $flag = true;
        }
        
        if(!$flag){
            if(strlen($pseudo) <= 100)
            {
                if(strlen($email) <= 100)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if($password == $password_confirm)
                        {
                            $password = hash('sha256', $password);

                            $data = array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'type' => 'user'
                            );

                            array_push($connectArray["data"], $data);
                            $Json = json_encode($connectArray);
                            file_put_contents("users.json", $Json);

                            header('Location:connect.php?login_err=success');
                        }else header('Location: signUp.php?reg_err=password');
                    }else header('Location: signUp.php?reg_err=email');
                }else header('Location: singUp.php?reg_err=email_length');
            }else header('Location: signUp.php?reg_err=pseudo_length');
        }else  header('Location: signup.php?reg_err=already');
    }else  header('Location: signup.php');