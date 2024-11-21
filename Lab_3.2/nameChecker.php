<?php
if (isset($_REQUEST["submit"])) {   

    $name = trim($_REQUEST["username"]); 

    
    if ($name == null || empty($name)) {
        echo "Name cannot be empty!!";
    } 
    
    elseif (str_word_count($name) < 2) {
        echo "Name should contain at least two words!!";
    } 
    
    elseif (!ctype_alpha($name[0])) {
        echo "Name must start with a letter!!";
    } 
   
    else {
        $isValid = true;

        for ($i = 0; $i < strlen($name); $i++) {
            $char = $name[$i];
            if (!(ctype_alpha($char) || $char === '.' || $char === '-' || $char === ' ')) {
                $isValid = false;
                break;
            }
        }

        if ($isValid) {
            echo "Your Name is " . htmlspecialchars($name);
        } else {
            echo "Invalid!! <br>
            A. Cannot be empty <br>
            B. Contains at least two words <br>
            C. Must start with a letter <br>
            D. Can contain a-z, A-Z, period, dash only";
        }
    }
} else {
    header("Location: name.html");
   
}
?>
