<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    
    if (empty($username) || empty($password)) {
        echo "Username and Password cannot be empty.";
        exit;
    }

    
    $is_valid_user = false;
    $user_file_path = "users.txt";

    
    if (file_exists($user_file_path) && is_readable($user_file_path)) {
        $users = file($user_file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($users as $user) {
            list($stored_user, $stored_pass, $stored_role) = explode(",", trim($user));
            
            
            if ($username === $stored_user && password_verify($password, $stored_pass)) {
                $is_valid_user = true;

                
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $stored_role;
                setcookie('status', 'true', time() + 3000, '/');

                
                $redirect_page = ($stored_role === "admin") ? "admin.php" : "user.php";
                header("Location: $redirect_page");
                exit;
            }
        }
    }

    
    if (!$is_valid_user) {
        echo "Invalid username or password!";
    }
} else {
    
    header('Location: login.html');
    exit;
}
?>
