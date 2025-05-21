<?php
session_start();


$valid_credentials = [
    'admin@example.com' => 'password123',
    'user@example.com' => 'securepass'
];

if (isset($_POST['btn'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['psw'] ?? '';
    
 
    if (array_key_exists($email, $valid_credentials) && $valid_credentials[$email] === $password) {
       
        $_SESSION['user_email'] = $email;
        header('Location: welcome.php');
        exit();
    } else {
        $error_message = "Email ou mot de passe incorrect";
    }
}
?>