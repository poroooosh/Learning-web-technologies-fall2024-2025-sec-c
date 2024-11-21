<?php
if (isset($_POST["submit"])) {   

    
    if (isset($_POST["blood_group"])) {
        $blood_group = $_POST["blood_group"];
    } else {
        $blood_group = "";
    }

    
    if (empty($blood_group)) {
        echo "Please select a blood group!";
    } else {
        echo "Your selected blood group is: " . htmlspecialchars($blood_group);
    }
} else {
    header("Location: bgChecker.html");
}
?>
