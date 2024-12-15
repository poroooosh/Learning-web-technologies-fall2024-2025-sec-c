<?php
session_start();


if (!isset($_SESSION['username'])) {
    echo "You must be logged in to change your password.";
    exit;
}


function updatePassword($username, $newPassword) {
    $file = "users.txt";
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $updatedLines = [];

    foreach ($lines as $line) {
        list($stored_user, $stored_pass, $stored_role) = explode(",", trim($line));

       
        if ($stored_user === $username) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updatedLines[] = "$stored_user,$hashedPassword,$stored_role";
        } else {
            $updatedLines[] = $line;
        }
    }

    
    file_put_contents($file, implode(PHP_EOL, $updatedLines));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_SESSION['username'];
    $oldPassword = trim($_POST['old_password']);
    $newPassword = trim($_POST['new_password']);
    $confirmPassword = trim($_POST['confirm_password']);

    
    if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        echo "All fields are required.";
        exit;
    }

    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match.";
        exit;
    }

    
    $file = "users.txt";
    $isPasswordCorrect = false;

    if (file_exists($file) && is_readable($file)) {
        $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($users as $user) {
            list($stored_user, $stored_pass, $stored_role) = explode(",", trim($user));

            if ($stored_user === $username && password_verify($oldPassword, $stored_pass)) {
                $isPasswordCorrect = true;
                break;
            }
        }
    } else {
        echo "User file not found.";
        exit;
    }

    if (!$isPasswordCorrect) {
        echo "Old password is incorrect.";
        exit;
    }

    updatePassword($username, $newPassword);

    echo "Password successfully changed!";
} else {
    
    header("Location: login.html");
    exit;
}
?>
