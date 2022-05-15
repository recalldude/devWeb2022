<?php 
    if(isset($_POST['submit'])){
    
        if(filter_var(htmlspecialchars($_POST['email']), FILTER_VALIDATE_EMAIL)){
            $surname = htmlspecialchars($_POST['surname']);
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $categorie = htmlspecialchars($_POST['Categorie']);
            $gender = htmlspecialchars($_POST['radio']);
            $message = htmlspecialchars($_POST['message']);
        } else{
            header('Location:contact.php?input_err=email');
        }

        
    } else{
        header('Location:contact.php?input_err=all');
    }