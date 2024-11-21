<?php
if (isset($_REQUEST["submit"])) {   

    
    if (isset($_REQUEST["gender"])) {
        $gender = $_REQUEST["gender"];
    } else {
        $gender = null;
    }

    
    if ($gender == null || empty($gender)) {
        echo "Gender cannot be empty!!";
    } else {
        
        $isValid = true;

        if ($gender !== "Male" && $gender !== "Female" && $gender !== "Other") {
            $isValid = false;
        }

        
        if ($isValid) {
            echo "You selected: " . htmlspecialchars($gender);
        }
    }
} else {
    header("Location: gender.html");
}
?>
