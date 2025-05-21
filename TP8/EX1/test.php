<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['nombre1'];
        $b = $_POST['nombre2'];
        $op = $_POST['operation'];
        $resultat = "";

        switch ($op) {
            case 'addition':
                $resultat = $a + $b;
                break;
            case 'soustraction':
                $resultat = $a - $b;
                break;
            case 'multiplication':
                $resultat = $a * $b;
                break;
            case 'division':
                if ($b != 0) {
                    $resultat = $a / $b;
                } else {
                    $resultat = "Erreur : division par zéro";
                }
                break;
        }

        echo "<h3>Résultat : $resultat</h3>";
    }
    ?>