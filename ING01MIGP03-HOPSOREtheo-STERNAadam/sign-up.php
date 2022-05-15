
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./style/style.css">
        <link rel="stylesheet" href="./style/sign-up.css">

        <title>PlanetLink | Sign up</title>
    </head>

    <body>
        <?php
            include("./phpLinkedPages/header.php");
        ?>
        <main>
            <?php if(isset($msg) and $msg): ?>
                <div id="message"> <p><?= $msg ?></p> </div>
            <?php endif;?>
            <form method="post">
                <h1>Inscription</h1>

                <label for="pseudo">Mail</label>
                <input type="text" name="pseudo" id="pseudo" placeholder="Entrer mail" <?php if (isset($_POST['pseudo'])) echo 'value="'. $_POST['pseudo'] .'"'; ?> >

                <label for="pass">Mot de passe</label>
                <input type="password" name="pass" id="pass" placeholder="Entrer mot de passe">

                <label for="confpass">Confirmer Mot de passe</label>
                <input type="password" name="confpass" id="confpass" placeholder="Confirmer mot de passe">

                <input type="submit" id="submit" value="INSCRIPTION">
            </form>
        </main>
    </body>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</html>