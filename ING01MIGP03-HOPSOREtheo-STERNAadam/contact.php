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
      include ("phpLinkedPages/header.php");
    ?>

    <section class="contact-section" id="contact_id">
        <div class="container">
            <div class="contact-left">
                <h2>Contact</h2>

                <form action="contact_back.php" method="post">
                  <div class="form-field">
                    <label for="name">Surname</label>
                    <input type="text" id="surname" name="surname" size="30">
                    <small></small>
                  </div>
                  <div class="form-field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" size="30">
                    <small></small>
                  </div>
                  <div class="form-field">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" size="30">
                    <small></small>
                  </div>
                  <div class="form-field">
                    <label for="categorie-select">Select the reason of your message</label>  
                    <select name="Categorie" id="categorie-select">
                        <option value="">--Please choose an option--</option>
                        <option value="question">Question</option>
                        <option value="problem_website">Problem on the website</option>
                        <option value="problem_products">Problem with one of our products</option>
                    </select>
                    <small></small>
                  </div>
                  

                  
                  <div class="form-field">
                    <label for="radio-1" class="radio-label">Gender</label>
                    <input type="radio" name="radio" id="radio-1" value="man" class="radio">
                    <label for="radio-1" >Man</label>

                    <input type="radio" name="radio" id="radio-2" value="woman" class="radio">
                    <label for="radio-2" >Woman</label>
                    <small></small>
                  </div>
                  
                  <div class="form-field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <small></small>
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
    
    <!--<script src="./script/formValidation.js"></script>-->
</body>
</html>