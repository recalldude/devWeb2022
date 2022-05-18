<?php 
    require 'vendor/autoload.php';
    use \Mailjet\Resources;
    $error=array();          
    $error["surname"] = !empty(htmlspecialchars($_POST['surname']));
    $error["name"] = !empty(htmlspecialchars($_POST['name']));
    $error["email-empty"] = !empty($_POST['email']);
    $error["email-valide"] = filter_var( filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
    $error["categorie"] = !empty(htmlspecialchars($_POST['Categorie']));
    $error["gender-empty"] = !empty(htmlspecialchars($_POST['radio']));
    $error["message"] = !empty(htmlspecialchars($_POST['message']));

    $count = 0;
    /*for ($i=0; $i<count($error); $i++){
        if ($error[$i] == false){
            $compteur++;
        }
    } */
    
    foreach($error as $key => $value){
        if ($value == false)
            $count +=1;
    }
    if ($count == 0){
        
       /* $mj = new \Mailjet\Client('44cbd66c3ba4dd1aeaea7e7c3120c541','0f1d2e78b93267bfd65725097d0d3c9d',true,['version' => 'v3.1']);
         $body = [
            'Messages' => [
              [
                'From' => [
                  'Email' => "jejin36559@cupbest.com",
                  'Name' => "erz'fsd"
                ],
                'To' => [
                  [
                    'Email' => "jejin36559@cupbest.com",
                    'Name' => "erz'fsd"
                  ]
                ],
                'Subject' => "Greetings from Mailjet.",
                'TextPart' => "My first Mailjet email",
                'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
                'CustomID' => "AppGettingStartedTest"
              ]
            ]
          ];
          $response = $mj->post(Resources::$Email, ['body' => $body]);
          $response->success() && var_dump($response->getData()); 
          header('Location:index.php'); */
          header('Location: contact.php?success');
    } else
        header('Location:contact.php?input_err='.serialize($error).'&input='.serialize($_POST));
    
    
           
        

