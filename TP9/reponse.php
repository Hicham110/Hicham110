<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réponse du formulaire</title>
</head>
<body>

<h2>Vos informations :</h2>

<?php

if (isset($_POST['btok'])) {

    
    $prenom = isset($_POST['prenom']) ;
    $nom = isset($_POST['nom']) ;
    $sexe = isset($_POST['sexe']) ? $_POST['sexe'] ;
    $date_naiss = isset($_POST['date_naiss']) ;
    $identifiant = isset($_POST['identifiant']) ;
    $mdp = isset($_POST['mdp']) ? "*********" : "";
    $debutant = isset($_POST['debutant']);

    echo "<p><strong>Prénom :</strong> $prenom</p>";
    echo "<p><strong>Nom :</strong> $nom</p>";

    echo "<p><strong>Sexe :</strong> ";
    echo ($sexe === 'H') ? "Homme" : "Femme";
    echo "</p>";

    echo "<p><strong>Date de naissance :</strong> $date_naiss</p>";
    echo "<p><strong>Identifiant :</strong> $identifiant</p>";
    echo "<p><strong>Mot de passe :</strong> $mdp</p>";
    echo "<p><strong>Débutant en PHP :</strong> $debutant</p>";

} else {
    echo "<p>Aucune donnée reçue. Veuillez remplir le formulaire.</p>";
}
?>

<br>
<a href="index.html">Retour au formulaire</a>

</body>
</html>