<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./style/contact.css" >
    <link rel="stylesheet" href="./style/style.css" >

    <script src="https://kit.fontawesome.com/9f84230440.js"  crossorigin="anonymous"></script>
    <title>PlanetLink-Contact</title>
</head>
<body>
 
    <?php 
      include ("./phpLinkedPages/sidebar.php");
      if(isset($_GET['input_err'])){
        $err = unserialize($_GET['input_err']);
        $oldInput= unserialize($_GET['input']);
      }
    ?>

    <section class="contact-section" id="contact_id">
        <div class="container">
            <div class="contact-left">
                <h2>Contact</h2>
                <?php if(isset($_GET['success'])) echo'<h3 class="success">Message successfully send</h3>' ?>
                <form action="contact_back.php" method="post">
                  <div class="form-field">
                    <label for="name">Surname</label>
                    <input type="text" id="surname" name="surname" size="30" <?php if(isset($err)) echo 'value="'.$oldInput["surname"].'"' ?> <?php if(isset($err) && $err['surname'] == false) echo 'class = "error"'; elseif(isset($err)) echo 'class = "success"' ?>>
                    <small> <?php if(isset($err) && $err['surname'] == false) echo 'This field is required' ?> </small>
                  </div>
                  <div class="form-field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" size="30" <?php if(isset($err)) echo 'value="'.$oldInput["name"].'"' ?> <?php if(isset($err) && $err['name'] == false) echo 'class = "error"'; elseif(isset($err)) echo 'class = "success"' ?>>
                    <small><?php if(isset($err) && $err['name'] == false) echo 'This field is required' ?></small>
                  </div>
                  <div class="form-field">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" size="30" <?php if(isset($err)) echo 'value="'.$oldInput["email"].'"' ?> <?php if(isset($err) && ($err['email-empty'] == false || $err['email-valide'] == false)) echo 'class = "error"'; elseif(isset($err)) echo 'class = "success"' ?>>
                    <small><?php if(isset($err) && $err['email-empty'] == false) echo 'This field is required'; elseif(isset($err) && $err['email-valide'] == false) echo 'Mail need to be valid'?></small>
                  </div>
                  <div class="form-field">
                    <label for="categorie-select">Select the reason of your message</label>  
                    <select name="Categorie" id="categorie-select"  <?php if(isset($err) && $err['categorie'] == false) echo 'class = "error"'; elseif(isset($err)) echo 'class = "success"' ?>>
                        <option value="">--Please choose an option--</option>
                        <option value="question">Question</option>
                        <option value="problem_website">Problem on the website</option>
                        <option value="problem_products">Problem with one of our products</option>
                    </select>
                    <small><?php if(isset($err) && $err['categorie'] == false) echo 'This field is required' ?></small>
                  </div>
                  

                  
                  <div class="form-field">
                    <label for="radio-1" class="radio-label">Gender</label>
                    <input type="radio" name="radio" id="radio-1" value="1" class="radio">
                    <label for="radio-1" >Man</label>

                    <input type="radio" name="radio" id="radio-2" value="0" class="radio">
                    <label for="radio-2" >Woman</label>
                    <small><?php if(isset($err) && $err['gender-empty'] == false) echo 'This field is required' ?></small>
                  </div>
                  
                  <div class="form-field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" <?php if(isset($err) && $err['message'] == false) echo 'class = "error"'; elseif(isset($err)) echo 'class = "success"' ?>> <?php if(isset($err)) echo $oldInput["message"] ?></textarea>
                    <small><?php if(isset($err) && $err['message'] == false) echo 'This field is required' ?></small>
                  </div>
                  <input type="submit" class="send-message-cta" value="Send">
                </form>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2615.7133806137363!2d2.0675577158739373!3d49.03505809620481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f5265bbc2f79%3A0x301dd6c7102e1852!2sCY%20Tech!5e0!3m2!1sfr!2sfr!4v1643388868959!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>


    <?php 
      include ("phpLinkedPages/footer.html");
    ?>
    
    <script src="./script/formValidation.js"></script>
</body>
</html>