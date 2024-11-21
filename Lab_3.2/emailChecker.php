<?php
if (isset($_REQUEST["submit"])) {   

    $email = trim($_REQUEST["email"]); 

    
    if ($email == null || empty($email)) {
        echo "Email cannot be empty!!";
    } 
    
    else {
        $emailChars = str_split($email); 
        $atCount = 0; 
        $dotPosition = -1; 
        $atPosition = -1; 

        
        for ($i = 0; $i < count($emailChars); $i++) {
            $char = $emailChars[$i];

            if ($char === '@') {
                $atCount++;
                $atPosition = $i;
            }
            if ($char === '.') {
                $dotPosition = $i;
            }
        }

        
        if ($atCount != 1) {
            echo "Invalid Email Address!! Must contain one '@'.";
        } elseif ($atPosition === 0) {
            echo "Invalid Email Address!! '@' cannot be the first character.";
        } elseif ($dotPosition < $atPosition + 2) {
            echo "Invalid Email Address!! There must be at least one character between '@' and '.'";
        } elseif ($dotPosition + 1 >= count($emailChars)) {
            echo "Invalid Email Address!! There must be at least one character after the last '.'";
        } else {
            echo "Your Email is: " . htmlspecialchars($email);
        }
    }
} else {
    header("Location: email.html");
    
}
?>
