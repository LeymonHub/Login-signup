<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user) {
        echo "Email already exists. Please try logging in.";
    } else 
        $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password) VALUES (:fullName, :email, :password)");
        if ($stmt->execute(['fullName' => $fullName, 'email' => $email, 'password' => $password])) {
            echo "Account created successfully. You can now <a href='index.html'>login</a>.";
        } else {
            echo "There was an error creating your account. Please try again.";
        }
    }
}
?>
