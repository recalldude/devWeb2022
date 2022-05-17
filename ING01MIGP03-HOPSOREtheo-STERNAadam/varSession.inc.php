<?php 
    
    $productsList = array( /* array(
        catégorie =>array(
             produit => array (image, nom, desc, id, stock, prix)))*/
             //$_GET["cat"]
        "Planet" => array(
            "WinterPlanet" => array("winterLowPoly.png","Winter Planet", "A frozen planet", "PL-304", 2, 199),
            "MountainPlanet" => array("mountainLowPoly.png","Mountain Planet", "A rocky planet", "PL-615", 2, 199),
            "CivilisedPlanet" => array("civilisedLowPoly.png","Civilised Planet", "A civilised planet", "PL-787", 6540, 299),
            "RedPlanet" => array("redLowPoly.png","Red Planet", "A non welcoming planet", "PL-254", 657, 275,4),
            "ElementalPlanet" => array("elementLowPoly.png","Elemental Planet", "4 seasons at the same time", "PL-054", 120, 360),
            "PurplePlanet" => array("purpleLowPoly.png","Purple Planet", "A boring planet", "PL-787", 65, 400)
        ),

        "Ship" => array(
            "FastShip" => array("ship1.png","Fast Ship", "The fastest ship", "SS-845", 150, 99,7),
            "ExplorerShip" => array("ship2.png","Explorer Ship", "Best ship to explore unknow systems", "SS-684", 2, 199),
            "MiningShip" => array("ship3.png","Mining Ship", "A ship used to exploit planets ressources", "SS-640", 15, 499),
            "AttackShip" => array("ship4.png","Attack Ship", "The warlord of space", "SS-274", 640, 899),
            "CruiserShip" => array("ship5.png","Cruiser Ship", "Best one to travel on long distance", "SS-078", 7, 899),
            "UltraCoolShip" => array("ship6.png","Ultra Cool Ship", "For cool people", "SS-540", 10, 1999)
            
        )
    );

    $productLogo = array("Planet"=>"<i class='bx bx-planet' ></i></box-icon>", "Ship"=>"<i class='bx bx-rocket'></i>");
?>