<?php
if (isset($_REQUEST["submit"])) {
    
    $day = $_REQUEST["date"];
    $month = $_REQUEST["month"];
    $year = $_REQUEST["year"];
    
    
    $error_message = "";

    
    if (empty($day) || empty($month) || empty($year)) {
        $error_message = "All fields must be filled.";
    } else {
        
        if (!is_numeric($day) || $day < 1 || $day > 31) {
            $error_message = "Day must be a number between 1 and 31.";
        }
        
       
        if (!is_numeric($month) || $month < 1 || $month > 12) {
            $error_message = "Month must be a number between 1 and 12.";
        }
        
        
        if (!is_numeric($year) || $year < 1953 || $year > 1998) {
            $error_message = "Year must be a number between 1953 and 1998.";
        }
    }

    
    if ($error_message) {
        echo "<p>$error_message</p>";
    } else {
        
        $formatted_date = $day . '/' . $month . '/' . $year;
        echo "Your date of birth is $formatted_date.</p>";
    }
}else {
    header("Location: DOB.html");
    
}
?>