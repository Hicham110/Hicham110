<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    $date = date('Y-m-d H:i:s');

    if (!empty($nom) && !empty($email) && !empty($message)) {
        $ligne = "Date: $date | Nom: $nom | Email: $email | Message: $message\n";
        file_put_contents('messages.txt', $ligne, FILE_APPEND);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (file_exists('messages.txt')) {
    $contenu = file('messages.txt');
    
    if ($contenu) {
        $contenu = array_reverse($contenu);
        
        foreach ($contenu as $ligne) {
            echo '<div class="message">' . nl2br(htmlspecialchars($ligne)) . '</div>';
        }
    } else {
        echo '<p>Aucun message pour le moment.</p>';
    }
} else {
    echo '<p>Aucun message pour le moment.</p>';
}
?>