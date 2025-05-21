<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse du formulaire</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="ico.png">
</head>
<body>
    <?php
    if($_POST) {
        
        $titre = strip_tags($_POST['titre']);
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $annee = isset($_POST['annee']) ? strip_tags($_POST['annee']) : '';
        $identifiant = strip_tags($_POST['identifiant']);
        $mdp = strip_tags($_POST['mdp']);
        $sexe = strip_tags($_POST['sexe']);
        
      
        echo "<h1>Bonjour $titre $prenom $nom</h1>";
        echo "<h2>Votre identifiant est : $identifiant</h2>";
        echo "<h3>Votre mot de passe est : $mdp</h3>";
        
        
        $mot = ($sexe == 'F') ? "débutante" : "débutant";
        
        
        if(isset($_POST['debutant'])) {
            echo "<p>Comme vous êtes $mot, c'est une excellente idée d'apprendre le PHP !</p>";
        }
        
       
        
    } else {
        echo "<p>Aucune donnée reçue. Veuillez remplir le formulaire.</p>";
    }
    ?>
</body>
</html>