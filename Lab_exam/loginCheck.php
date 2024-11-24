<?php
session_start();


if (isset($_SESSION['userData'])) {
    
    $storedEmail = $_SESSION['userData']['email'];
    $storedPassword = $_SESSION['userData']['password'];

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email === $storedEmail && $password === $storedPassword) {
           
            header("Location: home.php");
            exit();
        } else {
            
            echo "Invalid email or password. Please try again.</p>";
        }
    }
} else {
    
    echo "No user data found. Please register first.</p>";
}
?>
