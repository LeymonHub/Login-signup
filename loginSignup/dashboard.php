<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html"); 
    exit;
}

echo "<h1>Welcome, " . htmlspecialchars($_SESSION['user_name']) . "!</h1>";
echo "<p>You are logged in.</p>";
echo "<a href='logout.php'>Logout</a>";
?>
