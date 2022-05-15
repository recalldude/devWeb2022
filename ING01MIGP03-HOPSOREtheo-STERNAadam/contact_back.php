<?php 
    $error=array();          
    $error["surname"] = !empty(htmlspecialchars($_POST['surname']));
    $error["name"] = !empty(htmlspecialchars($_POST['name']));
    $error["email-empty"] = !empty($_POST['email']);
    $error["email-valide"] = filter_var( filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
    $error["categorie"] = !empty(htmlspecialchars($_POST['Categorie']));
    $error["gender-empty"] = !empty(htmlspecialchars($_POST['radio']));
    $error["message"] = !empty(htmlspecialchars($_POST['message']));


        
    header('Location:contact.php?input_err='.serialize($error).'&input='.serialize($_POST));
    
    
           
        

