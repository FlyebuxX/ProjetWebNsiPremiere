<?php 
    if (isset($_POST) && !empty($_POST)) {
        $identifiant = 'lv';
        $motDePasse = 'nsi';
        $erreur = NULL;
    
        if ($_POST['identifiant'] === $identifiant && $_POST['mdp'] === $motDePasse) {
            header('Location: accueil.html');
        } 
        
        elseif ($_POST['identifiant'] === $identifiant && $_POST['mdp'] != $motDePasse) {
            $erreur = "Mot de passe incorrect !";
        }
        
        elseif ($_POST['identifiant'] != $identifiant && $_POST['mdp'] === $motDePasse) {
            $erreur = "Identifiant inconnu !";
        }

        elseif ($_POST['identifiant'] != $identifiant && $_POST['mdp'] != $motDePasse) {
            $erreur = "Identifiant et mot de passe inconnus !";
        }
    }
?>  
<html lang="fr">
<head>
    <title>Eberhardt Valentin</title>
    <link href="images/icon.jpg" rel="shortcut icon">
    <link rel="stylesheet" href="css/connexion.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <script src="js/mdp.js"></script>
</head>
<body>
    <div id="container">
        <h1 class="connexion">Se Connecter</h1>
        <div class="border"></div>
            <div class="connexion-zone">         
                <form method="POST" class="contact-form" action="">
                    <div class="fields">
                        <label for="inputID">Identifiant</label>
                        <input type="text" class="contact-form-text" name="identifiant" required>
    
                        <label for="inputPassword">Mot de Passe</label>
                        <input type="password" class="contact-form-text" name="mdp" required>
    
                        <input type="submit"  class="contact-form-btn" value="Connexion">
                        <input type="reset" class="contact-form-btn" value="Réinitialiser">
                    </div>          
                </form>
                <?php
                 if(isset($erreur)) {
                    echo '<p class="connection-fail">'.$erreur."</p>";
                 }
                 ?>        
            </div>
    </div>
</body>
</html>