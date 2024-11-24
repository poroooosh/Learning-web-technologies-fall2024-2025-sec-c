<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];
    $name = $email = $password = $dob = $bloodGroup = $degree = $gender = "";

 
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = sanitize_input($_POST["name"]);
    }

    
    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } else {
        $email = sanitize_input($_POST["email"]);
      
        if (strpos($email, "@") === false || strpos($email, ".") === false) {
            $errors[] = "Invalid email format.";
        }
    }

    
    if (empty($_POST["password"])) {
        $errors[] = "Password is required.";
    } else {
        $password = sanitize_input($_POST["password"]);
    }

    
    if (empty($_POST["dob-day"]) || empty($_POST["dob-month"]) || empty($_POST["dob-year"])) {
        $errors[] = "Complete date of birth is required.";
    } else {
        $dob = $_POST["dob-day"] . "/" . $_POST["dob-month"] . "/" . $_POST["dob-year"];
    }


    if (empty($_POST["blood-group"])) {
        $errors[] = "Blood group is required.";
    } else {
        $bloodGroup = sanitize_input($_POST["blood-group"]);
    }


    if (empty($_POST["degree"])) {
        $errors[] = "At least one degree must be selected.";
    } else {
        $degree = implode(", ", $_POST["degree"]);
    }


    if (empty($_POST["gender"])) {
        $errors[] = "Gender is required.";
    } else {
        $gender = sanitize_input($_POST["gender"]);
    }

s
    if (count($errors) > 0) {
    
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
    
        $userData = [
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "dob" => $dob,
            "bloodGroup" => $bloodGroup,
            "degree" => $degree,
            "gender" => $gender
        ];

        
        session_start(); 
        $_SESSION['userData'] = $userData;

        
        echo "<h3>Profile Submitted Successfully!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Blood Group:</strong> $bloodGroup</p>";
        echo "<p><strong>Degree(s):</strong> $degree</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
    }
}


function sanitize_input($data) {
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
