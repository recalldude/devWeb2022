<?php  

    function connexion(){
        try{
            include "bddData.php"; 
            global $db;
            $db = new PDO('mysql:host='.$dbHostName.';dbname='.$dbName,  $dbUser, $connPassword);
            return TRUE;
        }
        catch(Exception $e){
            die('Erreur'.$e->getMessage());
            return FALSE;
        }
    }


    function deconnexion(){
        global $db;
        $db = null; 
    }
    

    connexion();
    
    
    