<?php
    session_start();
    if (isset($_REQUEST['submit'])) {

        
        $username = trim($_POST['username']);
        
        if ($username == null) {
            echo "Null username!"; 
        } elseif (str_word_count($username) < 2) {
            echo "Contain at least two words."; 
        } elseif (!ctype_alpha($username[0])) {
            echo "Must start with a letter.";
        } else {
            $allowed = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ";
            $valid = true;
            for ($i = 0; $i < strlen($username); $i++) {
                if (strpos($allowed, $username[$i]) === false) {
                    $valid = false;
                    break;
                }
            }

            if (!$valid) {
                echo "invalid characters";
            } else {
                $_SESSION['status'] = true;
                echo "Name: " . htmlspecialchars($username); 
                
            }
        }
    } else {
        header('location: name.html');
    }
?>