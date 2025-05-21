<?php
if (!isset($_POST['length'])) {
    header("Location: index.html");
    exit();
}

$length = intval($_POST['length']);
if ($length < 8) $length = 8;
if ($length > 64) $length = 64;

function generateSecurePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';
    $allChars = $lowercase . $uppercase . $numbers . $symbols;
    
    $password = '';
    $password .= $lowercase[random_int(0, strlen($lowercase) - 1)];
    $password .= $uppercase[random_int(0, strlen($uppercase) - 1)];
    $password .= $numbers[random_int(0, strlen($numbers) - 1)];
    $password .= $symbols[random_int(0, strlen($symbols) - 1)];
    
    for ($i = strlen($password); $i < $length; $i++) {
        $password .= $allChars[random_int(0, strlen($allChars) - 1)];
    }
    
    return str_shuffle($password);
}

$password = generateSecurePassword($length);
?>