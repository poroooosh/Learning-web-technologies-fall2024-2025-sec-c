<?php
if (isset($_REQUEST["submit"])) {   

    
    if (isset($_REQUEST["degree"])) {
        $degree = $_REQUEST["degree"];
    } else {
        $degree = [];
    }

    if (count($degree) < 2) {
        echo "Please select at least two degrees!";
    } else {
       
        echo "You selected the following degrees: <br>";
        foreach ($degree as $selected_degree) {
            echo htmlspecialchars($selected_degree) . "<br>";
        }
    }
} else {
    header("Location: degree.html");
}
?>
